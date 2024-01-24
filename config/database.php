<?php
$user = 'olinger';
$pass = 'Cash2023*';



try
{
    $db = new PDO ('mysql:host=blog.local;dbname=25DEVOPS_2_BDD_CO_1', $user, $pass);
//todo: clean code
//    foreach ($db->query('SELECT * FROM Categories') as $row)
//    {
//        print_r($row);
//    }
}
catch (PDOException $e)
{
    print "Erreur :" . $e->getMessage() . "<br/>";
    die;
}

?>
































