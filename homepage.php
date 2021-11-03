<?php

//instead of isset:
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //if above is true then way we have access to form input

    //Make sure the script can handle site defacement attacks: use htmlspecialchars()
    $title = trim(htmlspecialchars($_POST['title']));
    $content = trim(htmlspecialchars($_POST['content']));
    $author = trim(htmlspecialchars($_POST['author']));
    //trim removes spaces left and right

    $loader = new PostLoader();
    //instantiated PostLoader and have access to properties of the class PostLoader
    $loader->addPost($title, $content, $author);
    $loader->savePost();

    $posts = $loader->getPosts();

    //The messages are sorted from new (top) to old (bottom).
    $posts = array_reverse($posts); //store reversed array in variable

    //Only show the latest 20 posts.
    $posts = array_slice($posts, 0, 20);
    //makes new array

    //echo 'length of the array: ' .count($posts);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuestBook</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1><center> GuestBook</center></h1>

<form method="POST" >
    <center>
       <b>
    <label for="author">Author:
        <input type="text" name="author" id="author">
    </label>
    <label for="author">Title:
        <input type="text" name="title" id="title">
    </label>
    <label for="author">Message:
        <input type="text" name="content" id="content">
    </label>
    <br>
    <br>
    <button type="submit" >Submit</button>
 
    </center></b>
</form>
  

<div id="posts-wrapper">

    <?php

    if (!empty($posts)) {

        foreach ($posts as $post) {
            ?>
            <div class="single-post">

                <p><?php echo $post->getTitle()?></p>
                <p><?php echo $post->getContent()?></p>
                <p><?php echo $post->getAuthor()?></p>

            </div>
            <?php
        }
    }

    ?>

</div>

</body>
</html>
