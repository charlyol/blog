<?php



require '../app/persistances/blogPostData.php';
$listPosts = lastBlogPosts($dataBaseLink,10);
require'../ressources/views/layouts/home.tpl.php';
