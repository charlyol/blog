<?php

include('../config/database.php');

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);

if ($action == 'homepage' || $action==NULL){
    require '../app/controllers/homeController.php';
} else {
    require '../ressources/views/errors/404.php';
}

?>