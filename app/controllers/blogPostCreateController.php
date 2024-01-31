<?php
require '../app/persistances/blogPostData.php';


$formulaire=filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
if (count($_POST)>0) {
var_dump($formulaire);
$pseudo=$formulaire['pseudo'];
$titre=$formulaire['title'];
$nbCategorie=$formulaire['nbCategorie'];
testAuthorExist($dataBaseLink, $formulaire);
blogPostCreate($dataBaseLink , $formulaire , authorIdByPseudo($dataBaseLink, $pseudo));
getPostId($dataBaseLink, $titre);
blogCategorieChoice($dataBaseLink, $lastPostId, $nbCategorie);
}
$selectCat = findAllCategories($dataBaseLink);
require'../ressources/views/layouts/blogPostCreate.tpl.php';