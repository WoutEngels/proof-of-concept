<?php
include_once 'dbconnection.php';

$title = $_POST['title'];
$postText = $_POST['postText'];
$username = $_POST['username'];

if (!empty($title) && !empty($postText) && !empty($username)) {
    $query = "INSERT INTO posts (title, postText, username) VALUES ('$title', '$postText', '$username')";
    mysqli_query($con, $query);
    header('location:../createpost.php?createpost=success');
} else {
    header('location:../createpost.php?createpost=failed');
}
