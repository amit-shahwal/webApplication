const express = require("express");
const mongoose = require("mongoose");
const userRouter = require("./userRoute");
const viewRouter = require("./viewsRoutes");
const cookieParser = require("cookie-parser");
const dotenv = require("dotenv");

dotenv.config({ path: "./config.env" });

const app = express();
const port = 9000;

const DB =
  "mongodb+srv://amit:anurag@440@cluster0-jnyrj.mongodb.net/memegenerator?retryWrites=true&w=majority";

app.set("view engine", "pug");
app.set("views", `${__dirname}/views`);
mongoose
  .connect(DB, {
    useNewUrlParser: true,
    useCreateIndex: true,
    useFindAndModify: false,
  })
  .then(() => {
    console.log("success");
  });

app.use(express.json());
app.use(cookieParser());
app.use(express.static(`${__dirname}/public`));
app.use((req, res, next) => {
  //console.log('Hello from the middleware 👋');
  next();
});

app.use((req, res, next) => {
  req.requestTime = new Date().toISOString();
  console.log(req.cookies);
  next();
});
app.use("/api/v1/users", userRouter);
app.use("/", viewRouter);

app.listen(port, () => {
  console.log(`App running on port ${port}...`);
});
