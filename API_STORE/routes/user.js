const express = require("express");

const router = express.Router();
const {
  getUser,
  getUserById,
  updateUser,
  userPurchaseList,
} = require("../controllers/user");
const {
  signup,
  signin,
  signout,
  isSignedIN,
  isAuthenticated,
} = require("../controllers/auth");
const { getAllUsers } = require("../controllers/getAllUsers");
router.param("userId", getUserById);
router.get("/user/:userId", isSignedIN, isAuthenticated, getUser);
router.get("/users", getAllUsers);

router.put("/user/:userId", isSignedIN, isAuthenticated, updateUser);
router.put(
  "/orders/user/:userId",
  isSignedIN,
  isAuthenticated,
  userPurchaseList
);

module.exports = router;
