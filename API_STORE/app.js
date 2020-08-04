require("dotenv").config();

const express = require("express");
const mongoose = require("mongoose");
const bodyParser = require("body-parser");
const cookieParser = require("cookie-parser");
const cors = require("cors");
const app = express();

const authRoutes = require("./routes/auth");
const userRoutes = require("./routes/user");
const categoryRoutes = require("./routes/category.js");
const productRoutes = require("./routes/product");
const orderRoutes = require("./routes/order");


mongoose
  .connect(process.env.DB, {
    useNewUrlParser: true,
    useUnifiedTopology: true,
    useCreateIndex: true,
  })
  .then(() => {
    console.log("success");
  });
//middlewares
app.use(bodyParser.json());
app.use(cookieParser());
app.use(cors());

//routes

app.use("/api", authRoutes);
app.use("/api", userRoutes);
app.use("/api", categoryRoutes);
app.use("/api", productRoutes);
app.use("/api", orderRoutes);



const port = process.env.PORT || 8000;
//console.log(port);
app.listen(port, () => console.log("listening..."));
