<?php
/**
 * Created by PhpStorm.
 * User: mc
 * Date: 30/10/2015
 * Time: 11:09
 */

$serveur = 'localhost';
$user    = 'root';
$pass    = '';
$bdd     = 'pluginajax';
$port    = '8080';

try {
    $cnx = new PDO('mysql:host=' . $serveur . ';dbname=' . $bdd, $user, $pass);
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>