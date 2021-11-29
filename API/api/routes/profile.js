const express = require("express");
const router = express.Router();

const ProfileControllers = require("../controllers/profile.js");

router.get("/orders", ProfileControllers.get_orders);

router.post("/change/password", ProfileControllers.change_password);

module.exports = router;
