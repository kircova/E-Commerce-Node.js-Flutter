const e = require("express");
const Sequelize = require("sequelize");
const DataTypes = Sequelize.DataTypes;
const bcrypt = require("bcrypt");

const sequelize = require("../../config/database.js");

const Product = require("../models/product")(sequelize, DataTypes);
const Makes = require("../models/makes")(sequelize, DataTypes);
const Order = require("../models/order")(sequelize, DataTypes);
const OrderDetail = require("../models/order_detail")(sequelize, DataTypes);
const User = require("../models/user")(sequelize, DataTypes);

Order.hasMany(OrderDetail, { foreignKey: "oid" });
OrderDetail.belongsTo(Product, { foreignKey: "prid" });
Makes.hasOne(Order, { foreignKey: "oid" });

module.exports = {
  async get_orders(req, res) {
    Makes.findAll({
      where: { pid: req.userData.pid },
      include: [
        { model: Order, include: { model: OrderDetail, include: Product } },
      ],
    })
      .then((result) => {
        return res.status(200).send({ orders: result });
      })
      .catch((err) => {
        console.log(err);
        return res.status(500).send({ err: err });
      });
  },

  async change_password(req, res) {
    User.findOne({ where: { pid: req.userData.pid } })
      .then((user) => {
        bcrypt.hash(req.body.password, 10, (error, result) => {
          if (error) {
            console.log(error);
            return res.status(500).send({
              message:
                "Could not perform operation at this time, kindly try again later.",
            });
          }
          user.changePass(result);
          user.save().then(() => {
            return res.status(200).send({
              message: "Password has successfully changed!",
            });
          });
        });
      })
      .catch((err) => {
        console.log(err);
        return res.status(500).send({ err: err });
      });
  },
};
