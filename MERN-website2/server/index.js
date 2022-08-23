const { json } = require("express");
const express = require("express");
const cors = require("cors");
const mongoose = require("mongoose");

// express app
const app = express();

// middelware
app.use(express.json());
app.use(cors());

// routers
const postRouter = require("./routes/posts");
app.use("/posts", postRouter);
const commentRouter = require("./routes/comments");
app.use("/comments", commentRouter);

// connect to db
mongoose.connect(
  "mongodb+srv://woutengels:O7bjikW86vIKW4OH@cluster0.bsmfaag.mongodb.net/mernwebsite2?retryWrites=true&w=majority"
);

app.listen(3001, () => {
  console.log("Server Runs Perfectly!");
});
