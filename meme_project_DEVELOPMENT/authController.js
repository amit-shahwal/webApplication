const crypto = require("crypto");
const jwt = require("jsonwebtoken");
const User = require("./usermodel");

const signToken = (id) => {
  return jwt.sign({ id }, process.env.JWT_SECRET, {
    expiresIn: process.env.JWT_EXPPIRES,
  });
};

const createSendToken = (user, statuscode, res) => {
  const token = signToken(user._id);
  const cookieOptions = {
    expires: new Date(
      Date.now() + process.env.JWT_COKKIE_EXPIRES_IN * 24 * 60 * 60 * 1000
    ),
   
    httpOnly: true,
  };
  res.cookie("jwt", token,cookieOptions);
  user.password=undefined;
  res.status(statuscode).json({
    status: "successful",
    token,
    data: {
      user: user,
    },
  });
};
exports.signup = async (req, res, next) => {
  try {
    const newuser = await User.create(req.body);
    //console.log(newuser);
    createSendToken(newuser, 201, res);
  } catch (err) {
    res.status(400).json({
      status: "failed",
      message: err.message,
    });
  }
};
exports.login = async (req, res, next) => {
  try {
    const { email, password } = req.body;

    if (!email || !password) {
      // eslint-disable-next-line no-throw-literal
      throw new Error("email & password both should be present");
      // throw;
    }
    const user = await User.findOne({ email }).select("+password");
    // console.log(u);
    // const correct = ;
    if (!user || !(await user.correctPasswword(password, user.password))) {
      throw new Error("wrong id or  password");
    }
    createSendToken(user, 201, res);
  } catch (err) {
    res.status(400).json({
      status: "failed",
      message: err.message,
    });
  }
};
exports.protect = async (req, res, next) => {
  try {
    let token;
    if (
      req.headers.authorization ||
      req.headers.authorization.startsWith("Bearer")
    ) {
      token = req.headers.authorization.split(" ")[1];
    }
    else if(req.cookies.jwt)
    {
      token=req.cookies.jwt;
    }
    if (!(await jwt.verify(token, process.env.JWT_SECRET))) {
      throw new Error("you are not logged in to see this things");
    }
    //verification of token
    // console.log(await jwt.verify(token, process.env.JWT_SECRET));
    const freshuser = await jwt.verify(token, process.env.JWT_SECRET);

    const freshexist = await User.findById(freshuser.id);
    // if(freshuser.id)
    if (!freshexist) {
      throw new Error("ivalid web token");
    }
    req.user = freshexist;
    // console.log(req.user.role);
    next();
  } catch (err) {
    res.status(400).json({
      status: "failed",
      message: err.message,
    });
  }
};
//only for rendered pages so no errors
exports.isLoggedIn = async (req, res, next) => {
  try {
    let token;
 if(req.cookies.jwt)
    {
      token=req.cookies.jwt;
    }
    else
    return next();
    if (!(await jwt.verify(token, process.env.JWT_SECRET))) {
     return next();
    }
    //verification of token
    // console.log(await jwt.verify(token, process.env.JWT_SECRET));
    const freshuser = await jwt.verify(token, process.env.JWT_SECRET);

    const freshexist = await User.findById(freshuser.id);
    // if(freshuser.id)
    if (!freshexist) {
     return next();
     // throw new Error("ivalid web token");
    }
    //req.user = freshexist;
    res.locals.useer=freshexist;
    // console.log(req.user.role);
    console.log(res.locals.useer);
    next();
  } catch (err) {
    res.status(400).json({
      status: "failed",
      message: err.message,
    });
  }
};