const express = require("express");
const router = express.Router();
const PostModel = require("../models/posts");

router.get("/", (req, res) => {
  PostModel.find({}, (err, result) => {
    if (err) {
      res.json(err);
    } else {
      res.json(result);
    }
  });
});

router.get("/byId/:id", async (req, res) => {
  const id = req.params.id;
  const post = await PostModel.findById(id);
  res.json(post);
});

router.post("/", async (req, res) => {
  const post = req.body;
  const newPost = new PostModel(post);
  await newPost.save();

  res.json(post);
});

module.exports = router;
