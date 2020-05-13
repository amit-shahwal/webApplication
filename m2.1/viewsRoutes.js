const express = require('express');
const viewcontroller = require('./viewController');
const authController=require('./authController')
const router = express.Router();


router.use(authController.isLoggedIn);
router.get('/memes', viewcontroller.viewoverview);
router.get('/',authController.isLoggedInn, viewcontroller.getloginform);
router.get('/signup', viewcontroller.getsignupform);



module.exports = router;
