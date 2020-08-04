const express = require("express");

const router = express.Router();

const {
  getCategoryById,
  createCategory,
  getCategory,
  getAllCategories,
  updatecategory,
  deletecategory
} = require("../controllers/category");
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

//it vl populate profile filed
router.param("userId", getUserById);
router.param("categoryId", getCategoryById);

router.post(
  "/category/create/:userId",
  isSignedIN,
  isAuthenticated,
  isAdmin,
  createCategory
);
router.get("/category/:categoryId", getCategory);
router.get("/categories", getAllCategories);
router.put(
  "/category/:categoryId/:userId",
  isSignedIN,
  isAuthenticated,
  isAdmin,
  updatecategory
);

router.delete(
    "/category/:categoryId/:userId",
    isSignedIN,
    isAuthenticated,
    isAdmin,
    deletecategory
  );
  
module.exports = router;
