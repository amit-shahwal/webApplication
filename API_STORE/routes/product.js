const express = require("express");

const router = express.Router();
const {
  signup,
  signin,
  signout,
  isSignedIN,
  isAdmin,
  isAuthenticated,
} = require("../controllers/auth");
const {
  getUser,
  getUserById,
  updateUser,
  userPurchaseList,
} = require("../controllers/user");
const {
  getProductById,
  createProduct,
  getProduct,
  photo,
  updateProduct,
  deleteProduct,
} = require("../controllers/product");
router.param("userId", getUserById);
router.param("productId", getProductById);

//routes
router.post(
  "/product/create/:userId",
  isSignedIN,
  isAuthenticated,
  isSignedIN,
  createProduct
);

router.get("/product/:productId", getProduct);
router.get("/product/photo/:productId", photo);

router.delete(
  "/product/:productId/:userId",
  isSignedIN,
  isAuthenticated,
  isAdmin,
  deleteProduct
);
router.put(
  "/product/:productId/:userId",
  isSignedIN,
  isAuthenticated,
  isAdmin,
  updateProduct
);

module.exports = router;
