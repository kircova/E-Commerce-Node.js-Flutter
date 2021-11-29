const Sequelize = require("sequelize");

module.exports = (sequelize) => {
  class User extends Sequelize.Model {
    getPassword() {
      return this.pass;
    }
    getUserType() {
      return this.usertype;
    }

    changePass(hashedPass) {
      this.pass = hashedPass;
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
  User.init(
    {
      pid: {
        type: Sequelize.DataTypes.INTEGER,
        primaryKey: true,
        autoIncrement: true,
      },
      name: Sequelize.DataTypes.CHAR(20),
      surname: Sequelize.DataTypes.CHAR(20),
      email: {
        type: Sequelize.DataTypes.CHAR(50),
        unique: true,
      },
      pass: Sequelize.DataTypes.CHAR(50),
      personImgUrl: Sequelize.DataTypes.TEXT,
      usertype: Sequelize.DataTypes.INTEGER,
    },
    {
      // options
      sequelize,
      modelName: "User",
      tableName: "person",
      timestamps: false,
      freezeTableName: true,
      underscore: true,
      defaultScope: {
        attributes: { exclude: ["pass"] },
      },
      scopes: {
        withPassword: {
          attributes: { include: ["pass"] },
        },
      },
    }
  );
  return User;
};
