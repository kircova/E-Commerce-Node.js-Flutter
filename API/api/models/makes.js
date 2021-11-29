const Sequelize = require("sequelize");

module.exports = (sequelize) => {
  class Makes extends Sequelize.Model {
    /**
     * Helper method for defining associations.
     * This method is not a part of Sequelize lifecycle.
     * The `models/index` file will call this method automatically.
     */
    /* static associate(models) {
      // define association here
    } */
  }
  Makes.init(
    {
      oid: {
        type: Sequelize.DataTypes.INTEGER,
        primaryKey: true,
      },
      pid: {
        type: Sequelize.DataTypes.INTEGER,
        primaryKey: true,
      },
    },
    {
      // options
      sequelize,
      modelName: "Makes",
      tableName: "makes",
      timestamps: false,
      freezeTableName: true,
      underscore: true,
    }
  );
  return Makes;
};
