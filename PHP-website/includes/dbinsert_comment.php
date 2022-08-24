<?php
include_once 'dbconnection.php';

$commentBody = $_POST['commentBody'];
$postId = $_POST['postId'];

if (!empty($commentBody)) {
    $query = "INSERT INTO comments (commentBody, postId) VALUES ('$commentBody', '$postId')";
    mysqli_query($con, $query);
}

header('location:../post.php?id=' . $postId);
