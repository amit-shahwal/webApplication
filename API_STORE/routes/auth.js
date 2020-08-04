const express = require("express");

const router = express.Router();
const {  signup , signin,signout ,isSignedIN} = require("../controllers/auth");
const { check } = require("express-validator");
router.post(
  "/signup",
  [
    check("name", "name-minimum length should be atleast 3 char").isLength({
      min: 3,
    }),
    check("email", "email required").isEmail(),
    check(
      "password",
      "password is required"
    ).isLength({
      min: 5,
    }),
  ],
  signup
);
router.post(
    "/signin",
    [
    
      check("email", "email required").isEmail(),
      check(
        "password",
        "password-minimum length should be atleast 5 char"
      ).isLength({
        min: 5,
      }),
    ],
    signin
  );
router.get("/signout", signout);
router.get("/test", isSignedIN,(req,res)=>{
    res.send("a protected rout")
});
module.exports = router;
