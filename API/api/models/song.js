const Sequelize = require("sequelize");

module.exports = (sequelize) => {
  class Song extends Sequelize.Model {
    /**
     * Helper method for defining associations.
     * This method is not a part of Sequelize lifecycle.
     * The `models/index` file will call this method automatically.
     */
    /* static associate(models) {
      // define association here
    } */
  }
  Song.init(
    {
      prid: {
        type: Sequelize.DataTypes.INTEGER,
        primaryKey: true,
      },
      songname: {
        type: Sequelize.DataTypes.CHAR(50),
        primaryKey: true,
      },
      TrackNumber: Sequelize.DataTypes.INTEGER,
    },
    {
      // options
      sequelize,
      modelName: "Song",
      tableName: "songs",
      timestamps: false,
      freezeTableName: true,
      underscore: true,
    }
  );
  return Song;
};
