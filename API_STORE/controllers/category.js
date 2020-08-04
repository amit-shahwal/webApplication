const Category = require("../models/category");

exports.getCategoryById = (req, res, next, id) => {
  Category.findById(id).exec((err, cat) => {
    if (err) {
      return res.status(500).json({ error: "Category not found" });
    }
    req.category = cat;

    next();
  });
};
exports.createCategory = (req, res) => {
  const category = new Category(req.body);

  category.save((err, category) => {
    if (err) {
      return res.status(500).json({ error: "Category not saved in DB" });
    }
    return res.status(200).json({ category });
  });
};
exports.getCategory = (req, res) => {
  return res.status(200).json(req.category);
};
exports.getAllCategories = (req, res) => {
  Category.find().then((cat, err) => {
    res.status(200).json({
      category: cat,
    });
  });
};

exports.updatecategory = (req, res) => {
  const category = req.category;
  category.name = req.body.name;
  category.save((err, cat) => {
    if (err) {
      return res.status(500).json({ error: "Category not updated in DB" });
    }
    return res.status(200).json(cat);
  });
};
exports.deletecategory = (req, res) => {
  const category = req.category;

  category.remove((err, cat) => {
    if (err) {
      return res.status(500).json({ error: "Failed to delete" });
    }
    return res.status(200).json({
      message: "succesful delted",
    });
  });
};
