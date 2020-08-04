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
  pushOrderInPurchaseList,
} = require("../controllers/user");
const {
  getOrderById,
  createOrder,
  getAllOrders,
  getOrderStatus,
  updateStatus,
} = require("../controllers/order");
const { updateStock } = require("../controllers/product");

router.param("userId", getUserById);

router.param("orderId", getOrderById);

router.post(
  "/order/create/:userId",
  isSignedIN,
  isAuthenticated,
  pushOrderInPurchaseList,
  updateStock,
  createOrder
);

router.get(
  "/order/all/:userId",
  isSignedIN,
  isAuthenticated,
  isAdmin,
  getAllOrders
);

router.get(
  "/order/status/:userId",
  isSignedIN,
  isAuthenticated,
  isAdmin,
  getOrderStatus
);
router.put(
  "/order/:orderId/status/:userId",
  isSignedIN,
  isAuthenticated,
  isAdmin,
  updateStatus
);

module.exports = router;
