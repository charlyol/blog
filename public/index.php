<?php
echo 'Bienvenue sur le blog'

$action = filter_input(INPUT_GET, 'action');

if ($action == 'PageN°1') {
    require '/lienPageN°1';
} elseif ($action == '/pageN°2') {
    require 'lienPageN°2';
} else require 'ressources/views/errors/404.php';

?>