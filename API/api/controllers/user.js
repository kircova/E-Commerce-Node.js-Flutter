const Sequelize = require("sequelize");
const DataTypes = Sequelize.DataTypes;
const bcrypt = require("bcrypt");
const sequelize = require("../../config/database.js");
const jwt = require("jsonwebtoken");

const User = require("../models/user")(sequelize, DataTypes);
const Customer = require("../models/customer")(sequelize, DataTypes);
const Cart = require("../models/cart")(sequelize, DataTypes);

module.exports = {
  async user_sign_up(req, res) {
    const { name, surname, email, password } = req.body;
    if (
      name == null ||
      name == "" ||
      surname == null ||
      surname == "" ||
      email == null ||
      email == "" ||
      password == null ||
      password == ""
    ) {
      return res
        .status(400)
        .send({ message: "At least 1 field is not complete." });
    }

    User.scope("withPassword")
      .findOne({
        where: { email: email },
      })
      .then(async (user) => {
        if (user) {
          return res
            .status(422)
            .send({ message: "User with that email already exists" });
        }
        bcrypt.hash(password, 10, (error, result) => {
          if (error) {
            console.log(error);
            return res.status(500).send({
              message:
                "Could not perform operation at this time, kindly try again later.",
            });
          }
          User.create({
            email: email,
            pass: result,
            name: name,
            surname: surname,
            usertype: 0,
          }).then(async (result) => {
            await Customer.create({ pid: result.pid });
            await Cart.create({ pid: result.pid });
            return res
              .status(201)
              .send({ message: "Account created successfully" });
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

  async user_login(req, res) {
    const { email, password } = req.body;
    if (email == "" || password == "" || email == null || password == null) {
      return res
        .status(400)
        .send({ message: "At least 1 field is not complete." });
    }

    User.scope("withPassword")
      .findOne({
        where: { email: email },
      })
      .then((user) => {
        if (user) {
          bcrypt.compare(password, user.getPassword(), (err, result) => {
            if (err) {
              console.log(err);
              return res
                .status(401)
                .send({ message: "Wrong email or password!" });
            }
            if (result) {
              const token = jwt.sign(
                {
                  email: user.email,
                  pid: user.pid,
                  usertype: user.usertype,
                },
                process.env.JWT_KEY,
                {
                  expiresIn: "1h",
                }
              );
              return res.status(200).send({
                message: "Logged in successfully!",
                token: token,
                name: user.name,
                usertype: user.usertype,
              });
            }
            return res
              .status(401)
              .send({ message: "Wrong email or password!" });
          });
        } else {
          return res
            .status(422)
            .send({ message: "No user has been found with that email!" });
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

  async admin_login(req, res) {
    const { email, password } = req.body;
    if (email == "" || password == "" || email == null || password == null) {
      return res
        .status(400)
        .send({ message: "At least 1 field is not complete." });
    }

    User.scope("withPassword")
      .findOne({
        where: { email: email },
      })
      .then((user) => {
        if (user) {
          bcrypt.compare(password, user.getPassword(), (err, result) => {
            if (err) {
              console.log(err);
              return res
                .status(401)
                .send({ message: "Wrong email or password!" });
            }
            if (result) {
              if (user.getUserType() == 0) {
                return res.status(403).send({
                  message:
                    "Your account doesn't have the rights to login as admin!",
                });
              }
              const token = jwt.sign(
                {
                  email: user.email,
                  pid: user.pid,
                  usertype: user.usertype,
                },
                process.env.JWT_KEY,
                {
                  expiresIn: "1h",
                }
              );
              return res.status(200).send({
                message: "Logged in successfully!",
                token: token,
                name: "Manager",
                usertype: user.usertype,
              });
            }
            return res
              .status(401)
              .send({ message: "Wrong email or password!" });
          });
        } else {
          return res
            .status(422)
            .send({ message: "No user has been found with that email!" });
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
