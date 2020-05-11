const express = require('express');
const viewcontroller = require('./viewController');
const authController=require('./authController')
const router = express.Router();

router.use(authController.isLoggedIn);
router.get('/login', viewcontroller.getloginform);


module.exports = router;
