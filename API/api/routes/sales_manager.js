const express = require("express");
const router = express.Router();

const SalesManagerControllers = require("../controllers/sales_manager.js");

const createInvoice = require("../middleware/create-invoice.js");

router.get("/invoice/:oid", SalesManagerControllers.get_invoice, createInvoice);

router.get("/refund", SalesManagerControllers.get_refunds);

router.post("/refund/approve", SalesManagerControllers.approve_refund);

router.post("/refund/reject", SalesManagerControllers.reject_refund);

router.post("/discount/apply", SalesManagerControllers.apply_discount);

router.post("/discount/remove", SalesManagerControllers.remove_discount);

router.post("/invoice/between", SalesManagerControllers.get_invoices_dates);

module.exports = router;
