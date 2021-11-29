const express = require("express");
const app = express();
const mysql = require("mysql");
const morgan = require("morgan");
require("dotenv/config");

const productRoutes = require("./api/routes/products");
const orderRoutes = require("./api/routes/orders");
const userRoutes = require("./api/routes/user");
const productManagerRoutes = require("./api/routes/product_manager");
const salesManagerRoutes = require("./api/routes/sales_manager");
const profileRoutes = require("./api/routes/profile");

const checkAuth = require("./api/middleware/check-auth");
const product_manager_Auth = require("./api/middleware/product-manager-auth.js");
const sales_manager_Auth = require("./api/middleware/sales-manager-auth.js");
const customer_Auth = require("./api/middleware/customer-auth.js");
const createInvoice = require("./api/middleware/create-invoice.js");

// Middlewares => Functions that run when smth happens
// app.use(auth);
app.use(morgan("dev"));
app.use(express.urlencoded({ extended: false }));
app.use(express.json());

app.use((req, res, next) => {
  res.header("Access-Control-Allow-Origin", "*");
  res.header(
    "Access-Control-Allow-Headers",
    "Origin, X-Requested-With, Content-Type, Accept, Authorization"
  );
  if (req.method === "OPTIONS") {
    res.header("Access-Control-Allow-Methods", "PUT, POST, PATCH, DELETE, GET");
    return res.status(200).json({});
  }
  next();
});

// Routes

app.use("/products", productRoutes);
app.use("/order", checkAuth, customer_Auth, orderRoutes);
app.use("/user", userRoutes);
app.use("/pmanager", checkAuth, product_manager_Auth, productManagerRoutes);
app.use("/smanager", checkAuth, sales_manager_Auth, salesManagerRoutes);
app.use("/profile", checkAuth, customer_Auth, profileRoutes);

app.get("/yusufhan", createInvoice);

module.exports = app;
