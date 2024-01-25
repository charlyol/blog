<?php

echo 'Hello world';
require '../app/persistances/blogPostData.php';
$listPosts = lastBlogPosts($dataBaseLink,10);
var_dump($listPosts);

?>