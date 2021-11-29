const e = require("express");
const Sequelize = require("sequelize");
const DataTypes = Sequelize.DataTypes;

const sequelize = require("../../config/database.js");

const Product = require("../models/product")(sequelize, DataTypes);
const Song = require("../models/song")(sequelize, DataTypes);
const OrderDetail = require("../models/order_detail")(sequelize, DataTypes);
const Comment = require("../models/comment")(sequelize, DataTypes);
const User = require("../models/user")(sequelize, DataTypes);

Product.hasMany(Song, { foreignKey: "prid" });
Product.hasMany(Comment, { foreignKey: "prid" });
Comment.belongsTo(User, { foreignKey: "pid" });
module.exports = {
  async products_get_all(req, res) {
    try {
      const products = await Product.findAll({
        where: {
          isVisible: 1,
        },
      });
      return res.status(200).send({
        count: products.length,
        products: products.map((product) => {
          return {
            prid: product.prid,
            pname: product.pname,
            artist: product.artist,
            genre: product.genre,
            description: product.description,
            price: product.price,
            discountedPrice: product.discountedPrice,
            categoryId: product.categoryId,
            productImgUrl: product.productImgUrl,
            stock: product.stock,
            isVisible: product.isVisible,
            warranty: product.warranty,
            distributor: product.distributor,
            request: {
              type: "GET",
              url: "/products/" + product.prid,
            },
          };
        }),
      });
    } catch (e) {
      console.log(e);
      return res.status(500).send({
        message:
          "Could not perform operation at this time, kindly try again later.",
      });
    }
  },

  async products_get_one(req, res) {
    const prid = req.params.id;
    Product.findOne({
      where: {
        prid: prid,
        isVisible: 1,
      },
      include: [
        {
          model: Song,
        },
        {
          model: Comment,
          include: User,
          where: { isVisible: 1, isApproved: 1 },
          required: false,
        },
      ],
      order: [[Song, "TrackNumber", "ASC"]],
    })
      .then(async (product) => {
        if (product) {
          const ratings = await Comment.findAll({
            where: { prid: product.prid },
          });
          var rating = 0;
          var count = 0;
          for (i = 0; ratings && i < ratings.length; i++) {
            if (ratings[i].isApproved === 1 && ratings[i].isVisible === 1) {
              rating += ratings[i].rating;
              count++;
            }
          }

          rating /= count;
          return res.status(200).send({
            product: product,
            rating: rating,
          });
        }
        return res.status(204).send({
          product: null,
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

  async products_get_similar_products(req, res) {
    try {
      const genre = req.params.genre;
      const prid = req.params.id;
      const products = await Product.findAll({
        where: {
          [Sequelize.Op.and]: [
            { genre: genre },
            { prid: { [Sequelize.Op.ne]: prid } },
            { isVisible: 1 },
          ],
        },
      });
      if (products) {
        return res.status(200).send({
          products: products,
        });
      }
      return res.status(204).send({
        products: null,
      });
    } catch (e) {
      console.log(e);
      return res.status(500).send({
        message:
          "Could not perform operation at this time, kindly try again later.",
      });
    }
  },

  async products_get_by_genre(req, res) {
    try {
      const genre = req.params.genre;

      const products = await Product.findAll({
        where: {
          genre: genre,
          isVisible: 1,
        },
      });
      if (products) {
        return res.status(200).send({
          products: products,
        });
      }
      return res.status(204).send({
        products: null,
      });
    } catch (e) {
      console.log(e);
      return res.status(500).send({
        message:
          "Could not perform operation at this time, kindly try again later.",
      });
    }
  },

  async products_get_genres(req, res) {
    try {
      const genres = await Product.findAll({
        attributes: [Sequelize.fn("DISTINCT", Sequelize.col("genre")), "genre"],
        where: {
          isVisible: 1,
        },
      });
      if (genres) {
        return res.status(200).send({
          genres: genres,
        });
      }
      return res.status(204).send({
        genres: null,
      });
    } catch (e) {
      console.log(e);
      return res.status(500).send({
        message:
          "Could not perform operation at this time, kindly try again later.",
      });
    }
  },

  async products_get_features_products(req, res) {
    try {
      const orderDetails = await OrderDetail.findAll({});
      var values = {};
      orderDetails.forEach((element) => {
        if (values[element.prid]) {
          values[element.prid] += element.quantity;
        } else {
          values[element.prid] = element.quantity;
        }
      });

      var finalValues = [];
      for (var value in values) {
        finalValues.push([value, values[value]]);
      }

      finalValues.sort(function (a, b) {
        return b[1] - a[1];
      });
      console.log(finalValues);
      if (finalValues) {
        return res.status(200).send({
          values: finalValues,
        });
      }
      return res.status(204).send({
        values: null,
      });
    } catch (e) {
      console.log(e);
      return res.status(500).send({
        message:
          "Could not perform operation at this time, kindly try again later.",
      });
    }
  },

  async products_get_yusufhan(req, res) {
    try {
      const param1 = parseInt(req.params.param1);
      const param2 = parseInt(req.params.param2);
      const products = await Product.findAll({
        where: {
          price: {
            [Sequelize.Op.between]: [param1, param2],
          },
          isVisible: 1,
        },
      });

      if (products.length != 0) {
        return res.status(200).send({
          products: products,
        });
      } else {
        return res.status(204).send({
          products: null,
        });
      }
    } catch (e) {
      console.log(e);
      return res.status(500).send({
        message:
          "Could not perform operation at this time, kindly try again later.",
      });
    }
  },

  async products_get_increase_price(req, res) {
    try {
      const products = await Product.findAll({
        order: [["price", "ASC"]],
        where: {
          isVisible: 1,
        },
      });

      if (products.length != 0) {
        return res.status(200).send({
          products: products,
        });
      } else {
        return res.status(204).send({
          products: null,
        });
      }
    } catch (e) {
      console.log(e);
      return res.status(500).send({
        message:
          "Could not perform operation at this time, kindly try again later.",
      });
    }
  },

  async products_get_decrease_price(req, res) {
    try {
      const products = await Product.findAll({
        order: [["price", "DESC"]],
        where: {
          isVisible: 1,
        },
      });

      if (products.length != 0) {
        return res.status(200).send({
          products: products,
        });
      } else {
        return res.status(204).send({
          products: null,
        });
      }
    } catch (e) {
      console.log(e);
      return res.status(500).send({
        message:
          "Could not perform operation at this time, kindly try again later.",
      });
    }
  },

  async products_get_alphabetical(req, res) {
    try {
      const products = await Product.findAll({
        order: [["pname", "ASC"]],
        where: {
          isVisible: 1,
        },
      });

      if (products.length != 0) {
        return res.status(200).send({
          products: products,
        });
      } else {
        return res.status(204).send({
          products: null,
        });
      }
    } catch (e) {
      console.log(e);
      return res.status(500).send({
        message:
          "Could not perform operation at this time, kindly try again later.",
      });
    }
  },

  async products_search(req, res) {
    try {
      const { query } = req.body;
      const products = await Product.findAll({
        where: {
          [Sequelize.Op.or]: [
            { pname: { [Sequelize.Op.like]: "%" + query + "%" } },
            { genre: { [Sequelize.Op.like]: "%" + query + "%" } },
            { artist: { [Sequelize.Op.like]: "%" + query + "%" } },
            { description: { [Sequelize.Op.like]: "%" + query + "%" } },
          ],
          isVisible: 1,
        },
      });

      if (products.length != 0) {
        return res.status(200).send({
          products: products,
        });
      } else {
        return res.status(204).send({
          products: null,
        });
      }
    } catch (e) {
      console.log(e);
      return res.status(500).send({
        message:
          "Could not perform operation at this time, kindly try again later.",
      });
    }
  },

  async add_comment(req, res) {
    Comment.build({
      pid: req.userData.pid,
      prid: req.body.prid,
      com_text: req.body.text,
      rating: req.body.rating,
      isVisible: 0,
      isApproved: 2,
    })
      .save()
      .then(() => {
        return res.status(201).send({
          message: "Comment added.",
        });
      })
      .catch((err) => {
        console.log(err);
        return res.status(500).send({
          message:
            "Could not perform operation at this time, kindly try again later.",
          error: err,
        });
      });
  },
};
