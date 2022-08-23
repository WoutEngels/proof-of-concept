const mongoose = require("mongoose");

const CommentSchema = new mongoose.Schema({
  commentBody: {
    type: String,
    required: true,
  },
  post: {
    type: mongoose.Schema.Types.ObjectId,
    ref: "posts",
  },
});

module.exports = mongoose.model("comments", CommentSchema);
