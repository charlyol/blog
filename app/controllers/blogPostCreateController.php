<?php
require '../app/persistances/blogPostData.php';
//function
$selectCat = findAllCategories($dataBaseLink);

require'../ressources/views/layouts/blogPostCreate.tpl.php';