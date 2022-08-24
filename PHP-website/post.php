<?php
include_once 'includes/dbconnection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lampstack</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="app">
        <div class="navbar">
            <ul>
                <li>
                    <a href="index.php">Home Page</a>
                </li>
                <li>
                    <a href="createpost.php">Create A Post</a>
                </li>
            </ul>
        </div>
        <div class="postPage">
            <div class="leftSide">
                <div class="post" id="individual">
                    <?php
                    $id = $_GET['id'];

                    $sql = "SELECT * FROM posts WHERE id=$id;";
                    $result = mysqli_query($con, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if ($resultCheck = 1) {
                        $row = mysqli_fetch_assoc($result);
                        echo "<div class='title'>" . $row['title'] . "</div>";
                        echo "<div class='body'>" . $row['postText'] . "</div>";
                        echo "<div class='footer'>" . $row['username'] . "</div>";
                    }
                    ?>
                </div>
            </div>
            <div class="rightSide">
                <div class="addCommentContainer">
                    <form action="includes/dbinsert_comment.php" method="POST">
                        <input type="text" name="commentBody" placeholder="Write a comment..." value="">
                        <?php
                        echo "<input type='hidden' name='postId' value=$id>"
                        ?>
                        <button type="submit" name="submit">Add Comment</button>
                    </form>
                </div>
                <div class="listOfComments">
                    <?php
                    $sql = "SELECT * FROM comments WHERE postId=$id;";
                    $result = mysqli_query($con, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<div class='comment'>" . $row['commentBody'] . "</div>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
</body>

</html>