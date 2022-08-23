const express = require("express");
const router = express.Router();
const CommentsModel = require("../models/comments");

router.get("/:id", async (req, res) => {
  const id = req.params.id;
  const comments = await CommentsModel.find({ post: id });
  res.json(comments);
});

router.post("/", async (req, res) => {
  const comment = req.body;
  const newComment = new CommentsModel(comment);
  await newComment.save();

  res.json(comment);
});

module.exports = router;
