const express = require("express");
const router = express.Router();

const ProductsControllers = require("../controllers/products.js");

const checkAuth = require("../middleware/check-auth");

router.get("/all", ProductsControllers.products_get_all);

router.get("/genres", ProductsControllers.products_get_genres);

router.get("/featured", ProductsControllers.products_get_features_products);

router.get("/filter/genre/:genre", ProductsControllers.products_get_by_genre);

router.get(
  "/similar/:genre/:id",
  ProductsControllers.products_get_similar_products
);

router.get(
  "/filter/price/:param1/:param2",
  ProductsControllers.products_get_yusufhan
);

router.get(
  "/filter/price/increase",
  ProductsControllers.products_get_increase_price
);

router.get(
  "/filter/price/decrease",
  ProductsControllers.products_get_decrease_price
);

router.get(
  "/filter/alphabetical/increase",
  ProductsControllers.products_get_alphabetical
);

router.post("/search", ProductsControllers.products_search);

router.post("/add/comment", checkAuth, ProductsControllers.add_comment);

router.get("/:id", ProductsControllers.products_get_one);

module.exports = router;
