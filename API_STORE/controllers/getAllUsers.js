const User = require("../models/user");

exports.getAllUsers = (req, res) => {
  User.find().then((users,err) => {
    res.status(200).json({
      users,
    });
  });
};
