<?php

require '../app/persistances/blogPostData.php';
$id=$_GET['id'];
$listCommentsPosts = commentsByBlogPost($dataBaseLink, $id);
$Postsid = blogPostByld($dataBaseLink, $id);
require'../ressources/views/layouts/blogPost.tpl.php';











































