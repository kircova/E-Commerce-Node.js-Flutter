const e = require("express");
const Sequelize = require("sequelize");
const DataTypes = Sequelize.DataTypes;

const sequelize = require("../../config/database.js");
const { get_invoice } = require("./orders.js");

const Product = require("../models/product")(sequelize, DataTypes);
const Makes = require("../models/makes")(sequelize, DataTypes);
const Order = require("../models/order")(sequelize, DataTypes);
const OrderDetail = require("../models/order_detail")(sequelize, DataTypes);
const Comment = require("../models/comment")(sequelize, DataTypes);
const User = require("../models/user")(sequelize, DataTypes);
Comment.belongsTo(User, { foreignKey: "pid" });
Order.hasMany(OrderDetail, { foreignKey: "oid" });
OrderDetail.belongsTo(Product, { foreignKey: "prid" });
Order.hasOne(Makes, { foreignKey: "oid" });

module.exports = {
  async add_product(req, res) {
    try {
      const {
        pname,
        artist,
        genre,
        description,
        price,
        productImgUrl,
        stock,
        warranty,
        distributor,
      } = req.body;
      const product = Product.build({
        pname: pname,
        artist: artist,
        genre: genre,
        description: description,
        price: price,
        productImgUrl: productImgUrl,
        stock: stock,
        warranty: warranty,
        distributor: distributor,
        categoryId: 0,
        isVisible: 1,
      });
      await product.save();
      console.log("Product was saved to the database!");
      return res.status(201).send({
        message: "Product was saved to the database!",
      });
    } catch (e) {
      return res.status(500).send({
        message:
          "Could not perform operation at this time, kindly try again later.",
      });
    }
  },
  async remove_product(req, res) {
    try {
      const { prid } = req.body;
      const product = Product.findOne({ where: { prid: prid } });
      if (!(await product)) {
        return res.status(400).send({
          message: "Product not found.",
        });
      }
      if (!(await product).isVisible) {
        return res.status(202).send({
          message: "Product is already invisible",
        });
      }
      (await product).setInvisible();
      (await product).save();
      return res.status(200).send({
        message: "Product is set invisible.",
      });
    } catch (e) {
      return res.status(500).send({
        message:
          "Could not perform operation at this time, kindly try again later.",
      });
    }
  },
  async make_visible(req, res) {
    try {
      const { prid } = req.body;
      const product = Product.findOne({ where: { prid: prid } });
      if (!(await product)) {
        return res.status(400).send({
          message: "Product not found.",
        });
      }
      if ((await product).isVisible) {
        return res.status(202).send({
          message: "Product is already visible",
        });
      }
      (await product).setVisible();
      (await product).save();
      return res.status(200).send({
        message: "Product is set visible.",
      });
    } catch (e) {
      return res.status(500).send({
        message:
          "Could not perform operation at this time, kindly try again later.",
      });
    }
  },
  async change_stock(req, res) {
    try {
      const { prid, stock } = req.body;
      const product = Product.findOne({ where: { prid: prid } });
      if (!(await product)) {
        return res.status(400).send({
          message: "Product not found.",
        });
      }
      if (!parseInt(stock)) {
        return res.status(400).send({
          message: "Stock is not integer",
        });
      }
      (await product).setStock(stock);
      (await product).save();
      return res.status(200).send({
        message: "Product stock is updated.",
      });
    } catch (e) {
      return res.status(500).send({
        message:
          "Could not perform operation at this time, kindly try again later.",
      });
    }
  },

  async on_delivery(req, res) {
    try {
      const orders = Order.findAll({
        where: { orderStatus: "On delivery" },
      });
      const products = (await orders).map(async function (order) {
        return await OrderDetail.findOne({
          where: { oid: order.getOid() },
        })
          .then(function (response) {
            if (response) {
              response.address = order.shipAddress;
              return response;
            }
          })
          .then(async function (response) {
            if (response) {
              response.pid = await Makes.findOne({
                attributes: ["pid"],
                where: { oid: order.getOid() },
              }).then(function (res2) {
                if (res2) {
                  return res2.pid;
                }
              });
              if (response && response.pid) return response;
            }
          });
      });

      const result = Promise.all(products);

      return res.status(200).send({ ordreDetails: await result });
    } catch (e) {
      return res.status(500).send({
        message:
          "Could not perform operation at this time, kindly try again later.",
      });
    }
  },

  async get_comments(req, res) {
    try {
      Comment.findAll({
        where: { isApproved: 2 },
        include: User,
      }).then(function (comments) {
        return res.status(200).send({
          comments: comments,
          count: comments.length,
        });
      });
    } catch (e) {
      console.log(e);
      return res.status(500).send({
        message:
          "Could not perform operation at this time, kindly try again later.",
      });
    }
  },

  async approve_comment(req, res) {
    try {
      const { cid } = req.body;
      Comment.findOne({ where: { cid: cid } })
        .then(function (comment) {
          comment.approve();
          comment.makeVisible();
          return comment;
        })
        .then(function (comment) {
          comment.save();
        });
      return await res.status(200).send({
        message: "Comment approved.",
      });
    } catch (e) {
      return res.status(500).send({
        message:
          "Could not perform operation at this time, kindly try again later.",
      });
    }
  },

  async disapprove_comment(req, res) {
    try {
      const { cid } = req.body;
      Comment.findOne({ where: { cid: cid } })
        .then(function (comment) {
          comment.disapprove();
          comment.makeInvisible();
          return comment;
        })
        .then(function (comment) {
          comment.save();
        });
      return await res.status(200).send({
        message: "Comment disapproved.",
      });
    } catch (e) {
      return res.status(500).send({
        message:
          "Could not perform operation at this time, kindly try again later.",
      });
    }
  },

  async get_invoice(req, res, next) {
    Order.findOne({
      where: { oid: req.params.oid },
      include: { model: OrderDetail, include: Product },
    })
      .then((found) => {
        if (found) {
          req.order = found;
          next();
        } else {
          return res.status(200).send({
            message: "No order found with the given oid!",
          });
        }
      })
      .catch((err) => {
        console.log(err);
        return res.status(500).send({
          message:
            "Could not perform operation at this time, kindly try again later.",
        });
      });
  },

  async get_orders(req, res, next) {
    Order.findAll({
      include: [{ model: OrderDetail, include: Product }, Makes],
    })
      .then((orders) => {
        return res.status(200).send({
          orders: orders,
        });
      })
      .catch((err) => {
        console.log(err);
        return res.status(500).send({
          message:
            "Could not perform operation at this time, kindly try again later.",
        });
      });
  },

  async change_order_status(req, res) {
    const { oid, status } = req.body;
    Order.findOne({ where: { oid: oid } })
      .then((ord) => {
        if (!ord) {
          return res.status(401).send({
            message: "No order with given oid is found!",
          });
        }
        try {
          ord.setStatus(status);
        } catch (e) {
          return res.status(403).send({
            err: e,
          });
        }

        ord
          .save()
          .then(() => {
            return res.status(200).send({
              message: "Order status changed to " + status + "!",
            });
          })
          .catch((er) => {
            console.log(er);
            return res.status(500).send({
              message: "Order couldn't be saved.",
            });
          });
      })
      .catch((err) => {
        console.log(err);
        return res.status(500).send({
          message:
            "Could not perform operation at this time, kindly try again later.",
        });
      });
  },
};
