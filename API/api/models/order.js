const Sequelize = require("sequelize");

module.exports = (sequelize) => {
  class Order extends Sequelize.Model {
    getOid() {
      return this.oid;
    }
    setStatus(status) {
      this.orderStatus = status;
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
  Order.init(
    {
      oid: {
        type: Sequelize.DataTypes.INTEGER,
        primaryKey: true,
        autoIncrement: true,
      },
      orderdate: Sequelize.DataTypes.DATE,
      shipAddress: Sequelize.DataTypes.TEXT,
      isActive: Sequelize.DataTypes.TINYINT(1),
      orderPrice: Sequelize.DataTypes.FLOAT(10, 2),
      orderStatus: Sequelize.DataTypes.ENUM(
        "On delivery",
        "Delivered",
        "Cancelled",
        "Processing"
      ),
      name: Sequelize.DataTypes.CHAR(128),
      surname: Sequelize.DataTypes.CHAR(128),
      email: Sequelize.DataTypes.TEXT,
      ccNumber: Sequelize.DataTypes.CHAR(16),
      cvc: Sequelize.DataTypes.CHAR(3),
      ccDate: Sequelize.DataTypes.CHAR(5),
      invoice: {
        type: Sequelize.DataTypes.VIRTUAL,
      },
    },
    {
      // options
      sequelize,
      modelName: "Order",
      tableName: "order_table",
      timestamps: false,
      freezeTableName: true,
      underscore: true,
    }
  );
  return Order;
};
