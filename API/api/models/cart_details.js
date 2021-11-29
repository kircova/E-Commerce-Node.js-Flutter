const Sequelize = require("sequelize");

module.exports = (sequelize) => {
  class CartDetails extends Sequelize.Model {
    getQuantity() {
      return this.quantity;
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
  CartDetails.init(
    {
      cid: {
        type: Sequelize.DataTypes.INTEGER,
        primaryKey: true,
      },
      prid: {
        type: Sequelize.DataTypes.INTEGER,
        primaryKey: true,
      },
      //price: Sequelize.DataTypes.FLOAT(10, 2),
      quantity: Sequelize.DataTypes.INTEGER,
    },
    {
      // options
      sequelize,
      modelName: "CartDetails",
      tableName: "cartdetails",
      timestamps: false,
      freezeTableName: true,
      underscore: true,
    }
  );
  return CartDetails;
};
