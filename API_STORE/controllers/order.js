const { Order, ProductCart } = require("../models/order");
const { forEach } = require("lodash");

exports.getOrderById = (req, res, next, id) => {
  Order.findById(id)
    .populate("products.product", "name price")

    .exec((err, order) => {
      if (err) {
        return res.status(500).json({
          error: "NO ORDER",
        });
      }
      req.order = order;
      next();
    });
};


exports.createOrder = (req, res) => {
  req.body.order.user = req.profile;
  const order = new req.body.order();

  order.save((err, order) => {
    if (err) {
      return res.status(500).json({
        error: "unable to save order",
      });
    }
    res.status(200).json({
      order,
    });
  });
};
exports.getAllOrders = (req, res) => {
  Order.find()
    .populate("user", "__id name")
    .exec((err, order) => {
      if (err) {
        return res.status(500).json({
          error: "unable to fetch",
        });
      }
      res.json(order);
    });
};

exports.getOrderStatus = (req, res) => {
  res.json(Order.schema.path("status").enumValues);
};
exports.updateStatus = (req, res) => {
  Order.update(
    { _id: req.body.orderId },
    { $set: { status: req.body.status } },
    (err, order) => {
      if (err) {
        return res.status(500).json({
          error: "cannot update",
        });
      }
      res.json(order);
    }
  );
};
