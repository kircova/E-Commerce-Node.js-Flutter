const Sequelize = require("sequelize");

module.exports = new Sequelize(
  process.env.DB_DB,
  process.env.DB_USER,
  process.env.DB_PASS,
  {
    host: process.env.DB_HOST,
    dialect: "mysql",
    pool: {
      max: 5,
      min: 0,
      idle: 10000,
    },

    define: {
      // don't add the timestamp attributes (updatedAt, createdAt)
      timestamps: false,

      // disable the modification of table names; By default, sequelize will automatically
      // transform all passed model names (first parameter of define) into plural.
      // if you don't want that, set the following
      freezeTableName: true,
    },
  }
);
