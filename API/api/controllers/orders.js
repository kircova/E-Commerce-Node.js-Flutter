const Sequelize = require("sequelize");
const DataTypes = Sequelize.DataTypes;
const sequelize = require("../../config/database.js");
const user = require("../models/user");

const Makes = require("../models/makes")(sequelize, DataTypes);
const User = require("../models/user")(sequelize, DataTypes);
const Customer = require("../models/customer")(sequelize, DataTypes);
const Cart = require("../models/cart")(sequelize, DataTypes);
const CartDetails = require("../models/cart_details")(sequelize, DataTypes);

const Order = require("../models/order")(sequelize, DataTypes);
const OrderDetails = require("../models/order_detail")(sequelize, DataTypes);

const Product = require("../models/product")(sequelize, DataTypes);
CartDetails.belongsTo(Product, { foreignKey: "prid" });
Order.hasMany(OrderDetails, { foreignKey: "oid" });
OrderDetails.belongsTo(Product, { foreignKey: "prid" });
Cart.hasMany(CartDetails, { foreignKey: "cid" });
Makes.belongsTo(Order, { foreignKey: "oid" });
Makes.belongsTo(User, { foreignKey: "pid" });

module.exports = {
  async add_to_cart(req, res, next) {
    Product.findOne({ where: { prid: req.params.prid } })
      .then((value) => {
        if (value) {
          Cart.findOrCreate({
            where: { pid: req.userData.pid },
            defaults: { pid: req.userData.pid },
          }).then(([cart, isstrue]) => {
            CartDetails.findOrCreate({
              where: {
                [Sequelize.Op.and]: [
                  { cid: cart.getCid() },
                  { prid: req.params.prid },
                ],
              },
              defaults: {
                cid: cart.getCid(),
                prid: req.params.prid,
                //price: value.price,
              },
            })
              .then(([detail, istrue]) => {
                let q;
                try {
                  q = parseInt(req.params.quantity);
                } catch (errr) {
                  return res.status(401).send({
                    message: "Quantity is not integer.",
                  });
                }
                if (istrue) {
                  detail.quantity = 0;
                }
                detail.quantity += q;

                detail.save().then(() => {
                  return res.status(200).send({
                    message: "Item(s) added to cart.",
                  });
                });
              })
              .catch((err) => {
                console.log(err);
              });
          });
        } else {
          return res.status(401).send({
            message: "Product not found, wrong prid.",
          });
        }
      })
      .catch((err) => {
        return res.status(500).send({
          message:
            "Could not perform operation at this time, kindly try again later.",
        });
      });
  },

  async remove_from_cart(req, res, next) {
    Product.findOne({ where: { prid: req.params.prid } })
      .then((value) => {
        if (value) {
          Cart.findOne({
            where: { pid: req.userData.pid },
            defaults: { pid: req.userData.pid },
          }).then((cart) => {
            CartDetails.findOne({
              where: {
                [Sequelize.Op.and]: [
                  { cid: cart.getCid() },
                  { prid: req.params.prid },
                ],
              },
            })
              .then((detail) => {
                if (detail) {
                  let q;
                  try {
                    q = parseInt(req.params.quantity);
                  } catch (errr) {
                    return res.status(401).send({
                      message: "Quantity is not integer.",
                    });
                  }
                  console.log(detail);
                  detail.quantity -= q;
                  if (detail.quantity <= 0) {
                    detail.destroy();
                  }
                  detail.save().then(() => {
                    return res.status(200).send({
                      message: "Item(s) removed from cart.",
                    });
                  });
                } else {
                  return res
                    .status(401)
                    .send({ message: "The product is not in cart." });
                }
              })
              .catch((err) => {
                console.log(err);
              });
          });
        } else {
          return res.status(401).send({
            message: "Product not found, wrong prid.",
          });
        }
      })
      .catch((err) => {
        return res.status(500).send({
          message:
            "Could not perform operation at this time, kindly try again later.",
        });
      });
  },

  async get_cart(req, res, next) {
    Cart.findOne({
      where: { pid: req.userData.pid },
    })
      .then((cart) => {
        if (cart) {
          CartDetails.findAll({
            where: { cid: cart.getCid() },
            include: Product,
          }).then((details) => {
            res.status(200).send({
              cart: details,
            });
          });
        } else {
          res.status(400).send({
            message: "Cart is empty",
          });
        }
      })
      .catch((err) => {
        return res.status(500).send({
          message:
            "Could not perform operation at this time, kindly try again later.",
        });
      });
  },

  async give_order(req, res, next) {
    Cart.findOne({
      where: { pid: req.userData.pid },
      defaults: { pid: req.userData.pid },
    })
      .then(async (cart) => {
        if (!cart) {
          return res.status(400).send({
            message: "Empty Cart!",
          });
        }
        CartDetails.findAll({
          where: { cid: cart.getCid() },
          include: Product,
        }).then(async (details) => {
          if (details.length == 0) {
            return res.status(400).send({
              message: "Empty Cart!",
            });
          }
          let sum = 0;
          for (i = 0; i < details.length; i++) {
            sum += details[i].quantity * details[i].Product.price;
            if (details[i].quantity > details[i].Product.stock) {
              return res.status(403).send({
                prid: details[i].Product.prid,
                stock: details[i].Product.stock,
                quantity: details[i].quantity,
                message: "This product doesn't have that much stock",
              });
            }
          }
          Order.create({
            orderdate: Sequelize.literal("CURRENT_TIMESTAMP"),
            shipAddress: req.body.shipAddress,
            orderPrice: sum,
            name: req.body.name,
            surname: req.body.surname,
            email: req.body.email,
            ccNumber: req.body.ccNumber,
            cvc: req.body.cvc,
            ccDate: req.body.ccDate,
          })
            .then(async (order) => {
              Makes.create({
                oid: order.oid,
                pid: req.userData.pid,
              }).then(async () => {
                for (i = 0; i < details.length; i++) {
                  await OrderDetails.create({
                    oid: order.oid,
                    prid: details[i].prid,
                    price: details[i].Product.price,
                    quantity: details[i].quantity,
                  });
                  prod = await Product.findOne({
                    where: { prid: details[i].prid },
                  });
                  prod.decreaseStock(details[i].quantity);
                  await prod.save();
                }
                Cart.findOne({
                  where: { pid: req.userData.pid },
                  include: CartDetails,
                }).then(async (ccart) => {
                  for (k = 0; k < ccart.CartDetails.length; k++) {
                    await ccart.CartDetails[k].destroy();
                  }
                });
                return res.status(201).send({
                  message: "Order is given.",
                });
              });
            })
            .catch((e) => {
              return res.status(401).send({
                message: "Wrong information!",
              });
            });
        });
      })
      .catch((err) => {
        return res.status(500).send({
          message:
            "Could not perform operation at this time, kindly try again later.",
        });
      });
  },

  async get_orders(req, res, next) {
    Makes.findAll({ where: { pid: req.userData.pid } })
      .then(async (makess) => {
        if (makess.length == 0) {
          return res.status(202).send({
            orders: [],
          });
        }
        orders = [];
        for (i = 0; i < makess.length; i++) {
          orders.push(
            await Order.findOne({
              where: { oid: makess[i].oid },
              include: { model: OrderDetails, include: Product },
            })
          );
        }
        return res.status(200).send({
          orders: orders,
        });
      })
      .catch((err) => {
        return res.status(500).send({
          message:
            "Could not perform operation at this time, kindly try again later.",
        });
      });
  },

  async cancel_order(req, res) {
    OrderDetails.findAll({
      where: { oid: req.params.oid },
    })
      .then(async (details) => {
        if (details) {
          for (i = 0; i < details.length; i++) {
            prod = await Product.findOne({
              where: { prid: details[i].prid },
            });
            prod.increaseStock(details[i].quantity);
            await prod.save();
          }
          Order.findOne({ where: { oid: req.params.oid } }).then(
            async (ord) => {
              await ord.setStatus("Cancelled").save();
            }
          );
          return res.status(200).send({
            message: "Order cancelled.",
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

  async refund_product(req, res) {
    OrderDetails.findOne({
      where: { oid: req.body.oid, prid: req.body.prid },
    })
      .then(async (detail) => {
        if (detail) {
          /* prod = await Product.findOne({
            where: { prid: req.params.prid },
          });
          prod.increaseStock(detail.quantity);
          await prod.save(); */
          detail
            .requestRefund()
            .save()
            .then(() => {
              return res.status(200).send({
                message: "Refund is requested.",
              });
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

  async get_invoice(req, res, next) {
    Makes.findOne({
      where: { oid: req.params.oid, pid: req.userData.pid },
      include: [
        { model: User },
        { model: Order, include: { model: OrderDetails, include: Product } },
      ],
    })
      .then((isTrue) => {
        if (isTrue) {
          req.order = isTrue.Order;
          req.user = isTrue.User;
          next();
        } else {
          return res.status(401).send({
            message: "You don't have the order with this oid!",
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
};
