const Sequelize = require("sequelize");

module.exports = (sequelize) => {
  class Customer extends Sequelize.Model {
    /**
     * Helper method for defining associations.
     * This method is not a part of Sequelize lifecycle.
     * The `models/index` file will call this method automatically.
     */
    /* static associate(models) {
      // define association here
    } */
  }
  Customer.init(
    {
      pid: {
        type: Sequelize.DataTypes.INTEGER,
        primaryKey: true,
      },
      Review: Sequelize.DataTypes.TEXT,
      taxID: Sequelize.DataTypes.INTEGER(10),
      address: Sequelize.DataTypes.TEXT,
    },
    {
      // options
      sequelize,
      modelName: "Customer",
      tableName: "customer",
      timestamps: false,
      freezeTableName: true,
      underscore: true,
    }
  );
  return Customer;
};
