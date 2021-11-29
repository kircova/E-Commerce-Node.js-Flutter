const Sequelize = require("sequelize");

module.exports = (sequelize) => {
  class Cart extends Sequelize.Model {
    getCid() {
      return this.cid;
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
  Cart.init(
    {
      pid: {
        type: Sequelize.DataTypes.INTEGER,
      },
      cid: {
        type: Sequelize.DataTypes.INTEGER,
        primaryKey: true,
        autoIncrement: true,
      },
    },
    {
      // options
      sequelize,
      modelName: "Cart",
      tableName: "cart",
      timestamps: false,
      freezeTableName: true,
      underscore: true,
    }
  );
  return Cart;
};
