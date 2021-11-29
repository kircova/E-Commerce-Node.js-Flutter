const express = require("express");
const router = express.Router();

const OrdersController = require("../controllers/orders");
const order = require("../models/order");

const createInvoice = require("../middleware/create-invoice.js");

router.get("/invoice/:oid", OrdersController.get_invoice, createInvoice);

router.get("/get", OrdersController.get_orders);

router.post("/give", OrdersController.give_order);

router.post("/refund", OrdersController.refund_product);

router.post("/cancel/:oid", OrdersController.cancel_order);

router.get("/cart", OrdersController.get_cart);

router.post("/cart/add/:prid/:quantity", OrdersController.add_to_cart);

router.post("/cart/remove/:prid/:quantity", OrdersController.remove_from_cart);

module.exports = router;
