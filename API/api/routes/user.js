const express = require("express");
const router = express.Router();

const UserControllers = require("../controllers/user.js");

router.post("/register", UserControllers.user_sign_up);

router.post("/login", UserControllers.user_login);

router.post("/admin/login", UserControllers.admin_login);
module.exports = router;
