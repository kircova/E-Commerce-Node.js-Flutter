const Sequelize = require("sequelize");

module.exports = (sequelize) => {
  class OrderDetail extends Sequelize.Model {
    requestRefund() {
      this.productStatus = 2;
      return this;
    }

    approveRefund() {
      this.productStatus = 3;
      return this;
    }

    rejectRefund() {
      this.productStatus = 4;
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
  OrderDetail.init(
    {
      oid: {
        type: Sequelize.DataTypes.INTEGER,
        primaryKey: true,
      },
      prid: {
        type: Sequelize.DataTypes.INTEGER,
        primaryKey: true,
      },
      price: Sequelize.DataTypes.FLOAT(10, 2),
      quantity: Sequelize.DataTypes.INTEGER,
      productStatus: Sequelize.DataTypes.INTEGER,
      address: {
        type: Sequelize.DataTypes.VIRTUAL,
      },
      pid: {
        type: Sequelize.DataTypes.VIRTUAL,
      },
    },
    {
      // options
      sequelize,
      modelName: "OrderDetail",
      tableName: "orderdetails",
      timestamps: false,
      freezeTableName: true,
      underscore: true,
    }
  );
  return OrderDetail;
};
