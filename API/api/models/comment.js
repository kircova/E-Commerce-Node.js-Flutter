const Sequelize = require("sequelize");

module.exports = (sequelize) => {
  class Comment extends Sequelize.Model {
    approve() {
      this.isApproved = 1;
    }
    disapprove() {
      this.isApproved = 0;
    }
    makeVisible() {
      this.isVisible = 1;
    }
    makeInvisible() {
      this.isVisible = 0;
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
  Comment.init(
    {
      cid: {
        type: Sequelize.DataTypes.INTEGER,
        primaryKey: true,
      },
      pid: {
        type: Sequelize.DataTypes.INTEGER,
        allowNull: false,
      },
      prid: {
        type: Sequelize.DataTypes.INTEGER,
        allowNull: false,
      },
      com_text: Sequelize.DataTypes.TEXT,
      rating: Sequelize.DataTypes.INTEGER,
      isVisible: Sequelize.DataTypes.TINYINT(1),
      time: Sequelize.DataTypes.DATE,
      isApproved: Sequelize.DataTypes.SMALLINT(4),
    },
    {
      // options
      sequelize,
      modelName: "Comment",
      tableName: "comment",
      timestamps: false,
      freezeTableName: true,
      underscore: true,
    }
  );
  return Comment;
};
