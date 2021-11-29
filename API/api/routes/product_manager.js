const express = require("express");
const router = express.Router();

const ProductManagerControllers = require("../controllers/product_manager.js");
const createInvoice = require("../middleware/create-invoice.js");

router.get(
  "/invoice/:oid",
  ProductManagerControllers.get_invoice,
  createInvoice
);

router.get("/orders", ProductManagerControllers.get_orders);

router.get("/ondelivery", ProductManagerControllers.on_delivery);

router.get("/comments", ProductManagerControllers.get_comments);

router.post("/add", ProductManagerControllers.add_product);

router.post("/delete", ProductManagerControllers.remove_product);

router.post("/visible", ProductManagerControllers.make_visible);

router.post("/status/update", ProductManagerControllers.change_order_status);

router.post("/stock/update", ProductManagerControllers.change_stock);

router.post("/comments/approve", ProductManagerControllers.approve_comment);

router.post(
  "/comments/disapprove",
  ProductManagerControllers.disapprove_comment
);

module.exports = router;
