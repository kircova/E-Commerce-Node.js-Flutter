const Sequelize = require("sequelize");
const DataTypes = Sequelize.DataTypes;

const sequelize = require("../../config/database.js");

const Makes = require("../models/makes")(sequelize, DataTypes);
const User = require("../models/user")(sequelize, DataTypes);
const Product = require("../models/product")(sequelize, DataTypes);
const Order = require("../models/order")(sequelize, DataTypes);
const OrderDetail = require("../models/order_detail")(sequelize, DataTypes);

Makes.belongsTo(Order, { foreignKey: "oid" });
Makes.belongsTo(User, { foreignKey: "pid" });
Order.hasMany(OrderDetail, { foreignKey: "oid" });
OrderDetail.belongsTo(Order, { foreignKey: "oid" });

OrderDetail.belongsTo(Product, { foreignKey: "prid" });

module.exports = {
  async get_refunds(req, res) {
    OrderDetail.findAll({
      where: { productStatus: 2 },
      include: { model: Order },
    })
      .then((details) => {
        return res.status(200).send({
          details: details,
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

  async approve_refund(req, res) {
    OrderDetail.findOne({
      where: { oid: req.body.oid, prid: req.body.prid },
    })
      .then(async (detail) => {
        if (detail && detail.productStatus == 2) {
          prod = await Product.findOne({
            where: { prid: req.body.prid },
          });
          prod.increaseStock(detail.quantity);
          await prod.save();
          detail
            .approveRefund()
            .save()
            .then(() => {
              return res.status(201).send({
                message: "Refund is approved",
              });
            });
        } else {
          return res.status(401).send({
            message: "Order can not be found or there is no refund request.",
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

  async reject_refund(req, res) {
    OrderDetail.findOne({
      where: { oid: req.body.oid, prid: req.body.prid },
    })
      .then(async (detail) => {
        if (detail && detail.productStatus == 2) {
          detail
            .rejectRefund()
            .save()
            .then(() => {
              return res.status(201).send({
                message: "Refund is rejected",
              });
            });
        } else {
          return res.status(401).send({
            message: "Order can not be found or there is no refund request.",
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

  async apply_discount(req, res) {
    const { prid, discountedPrice } = req.body;

    if (!parseInt(discountedPrice)) {
      return res.status(400).send({
        message: "Discounted price is not integer",
      });
    }

    Product.findOne({ where: { prid } })
      .then(async (prod) => {
        prod.applyDiscount(parseInt(discountedPrice));
        await prod.save();
        return res.status(200).send({
          message: "Discount applied!",
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

  async remove_discount(req, res) {
    const { prid } = req.body;

    Product.findOne({ where: { prid: prid } })
      .then(async (prod) => {
        prod.removeDiscount();
        await prod.save();
        return res.status(200).send({
          message: "Discount removed!",
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

  async get_invoice(req, res, next) {
    Makes.findOne({
      where: { oid: req.params.oid },
      include: [
        { model: User },
        { model: Order, include: { model: OrderDetail, include: Product } },
      ],
    })
      .then((doesExist) => {
        if (doesExist) {
          req.order = doesExist.Order;
          req.user = doesExist.User;
          next();
        } else {
          return res.status(403).send({
            message: "No order is found with the given oid " + req.params.oid,
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

  async get_invoices_dates(req, res) {
    const { startDate, endDate } = req.body;
    if (!startDate || !endDate) {
      return res.status(403).send({
        message: "Wrong date formats!",
      });
    }
    const from_date = new Date(startDate);
    const to_date = new Date(endDate);

    Order.findAll({
      where: {
        orderDate: {
          [Sequelize.Op.between]: [from_date, to_date],
        },
        /* from: {
          $between: [from_date, to_date],
        }, */
      },
      order: [["orderDate", "ASC"]],
      include: { model: OrderDetail, include: Product },
    })
      .then((orders) => {
        if (orders) {
          for (i = 0; i < orders.length; i++) {
            orders[i].invoice =
              "http://localhost:3000/smanager/invoice/" + orders[i].oid;
          }
        }
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
};
