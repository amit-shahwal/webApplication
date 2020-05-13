const Meme = require("./mememodel");

exports.getloginform = async (req, res) => {
  try {
    //  const tours = Tour.find();
    res.status(200).render("login", {
      title: "log in to your account",
    });
  } catch (err) {
    res.status(400).json({
      status: "failed",
      message: err,
    });
  }
};
exports.getsignupform = async (req, res) => {
  try {
    //  const tours = Tour.find();
    res.status(200).render("signup", {
      title: "log in to your account",
    });
  } catch (err) {
    res.status(400).json({
      status: "failed",
      message: err,
    });
  }
};

exports.viewoverview = async (req, res) => {
  try {
    const memes = await Meme.find();

    const count = memes.length;
    Meme.findRandom({}, {}, { limit: count }, function (err, result) {
      if (!err) {
        res.status(200).render("overview", {
          title: "All MEMES",
          memes: result,
        });
      }
    });
  } catch (err) {
    res.status(400).json({
      status: "failed",
      message: err,
    });
  }
};
