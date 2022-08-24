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

        <div class="createPostPage">
            <form class="formContainer" action="includes/dbinsert.php" method="POST">
                <label>Title: </label>
                <input type="text" name="title" placeholder="Enter a title..." id="inputCreatePost">
                <label>Post: </label>
                <input type="text" name="postText" placeholder="Enter post text..." id="inputCreatePost">
                <label>Username: </label>
                <input type="text" name="username" placeholder="Enter a username..." id="inputCreatePost">
                <button type="submit" name="submit"> Create Post </button>
            </form>
        </div>
    </div>
</body>

</html>