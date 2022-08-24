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
    <div class="allPosts">
      <?php
      $sql = "SELECT * FROM posts;";
      $result = mysqli_query($con, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          echo "<a class='post' href='post.php?id=$id' role='button'>";

          echo "<div class='title'>" . $row['title'] . "</div>";
          echo "<div class='body'>" . $row['postText'] . "</div>";
          echo "<div class='footer'>" . $row['username'] . "</div>";

          echo "</a>";
        }
      }
      ?>
    </div>
  </div>
</body>

</html>