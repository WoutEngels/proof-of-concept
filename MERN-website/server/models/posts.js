const mongoose = require("mongoose");

const PostSchema = new mongoose.Schema({
  title: {
    type: String,
    required: true,
  },
  postText: {
    type: String,
    required: true,
  },
  username: {
    type: String,
    required: true,
  },
});

PostSchema;

module.exports = mongoose.model("posts", PostSchema);
