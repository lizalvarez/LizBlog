<?php
$title = filter_imput(INPUT_POST, "title", FILTER_SANITIZE_STRING);
//validate the imput, get the actual input
$post = filter_imput(INPUT_POST, "post", FILTER_SANITIZE_STRING);

echo "<p> title: $title</p>";
echo "<p> post: $post</p>";

