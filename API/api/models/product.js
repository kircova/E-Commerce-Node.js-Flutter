const Sequelize = require("sequelize");
const sequelize = require("../../config/database.js");

module.exports = (sequelize) => {
  class Product extends Sequelize.Model {
    setInvisible() {
      this.isVisible = 0;
    }

    setVisible() {
      this.isVisible = 1;
    }

    setStock(stock) {
      this.stock = stock;
    }

    increaseStock(by) {
      this.stock += by;
      return this;
    }

    decreaseStock(by) {
      this.stock -= by;
      if (this.stock < 0) {
        this.stock = 0;
      }
      return this;
    }

    applyDiscount(pr) {
      this.discountedPrice = pr;
      return this;
    }

    removeDiscount() {
      this.discountedPrice = null;
      return this;
    }
    /**
     * Helper method for defining associations.
     * This method is not a part of Sequelize lifecycle.
     * The `models/index` file will call this method automatically.
     */
    /* static associate(models) {
      // define association here
    } */
  }
  Product.init(
    {
      prid: {
        type: Sequelize.DataTypes.INTEGER,
        primaryKey: true,
        autoIncrement: true,
      },
      pname: Sequelize.DataTypes.CHAR(100),
      artist: Sequelize.DataTypes.CHAR(50),
      genre: Sequelize.DataTypes.CHAR(50),
      description: Sequelize.DataTypes.TEXT,
      price: Sequelize.DataTypes.FLOAT(10, 2),
      discountedPrice: {
        type: Sequelize.DataTypes.FLOAT(10, 2),
        allowNull: true,
      },
      categoryId: Sequelize.DataTypes.INTEGER,
      productImgUrl: Sequelize.DataTypes.TEXT,
      stock: Sequelize.DataTypes.INTEGER,
      isVisible: Sequelize.DataTypes.TINYINT((length = 1)),
      warranty: Sequelize.DataTypes.INTEGER((length = 16)),
      distributor: Sequelize.DataTypes.CHAR(50),
    },
    {
      // options
      sequelize,
      modelName: "Product",
      tableName: "product",
      timestamps: false,
      freezeTableName: true,
      underscore: true,
    }
  );
  return Product;
};
