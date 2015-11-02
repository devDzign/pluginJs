<?php
/**
 * Created by PhpStorm.
 * User: mc
 * Date: 30/10/2015
 * Time: 15:34
 */

include_once '../connect/connect.php';

if (!isset($_POST['cle'])) {
    header('Location: ./');
    die(-1);
}

$cle  = $_POST['cle'];
$vote = $_POST['vote'];

if(isset($_SERVER['ROMOTE_ADDR'])) {
    $ip =  $_SERVER['ROMOTE_ADDR'];
}else{
    $ip = '-1';
}

/**
 * Connexion a la base de donnees
 */
$nb_jaimes = 0;

$query = array('motclef' => $cle);
$sql   = 'SELECT *  FROM jaime WHERE types = :motclef LIMIT 1';
$req   = $cnx->prepare($sql);
$req->execute($query);
$count = $req->rowCount($sql);

if ($count == 1) {
    while ($result = $req->fetch(PDO::FETCH_OBJ)) {
        $nb_jaimes = $result->votes;
    }
    if ($vote === 'true') {
        $nb_jaimes = $nb_jaimes + 1;
        $query     = array('votes' => $nb_jaimes, 'ip' => $ip, 'cle' => $cle);
        $sql       = 'UPDATE jaime SET votes = :votes, derniere_vote = NOW(), derniere_ip = :ip WHERE types = :cle';
        $req       = $cnx->prepare($sql);
        $req->execute($query);
    }


} else {
    // inserer
    if ($vote == 'true') {
        $nb_jaimes = 1;
        $query = array('cle' => $cle, 'ip' => $ip);
        $sql   = 'INSERT INTO jaime(votes,types,derniere_vote , derniere_ip) VALUES(1,:cle, NOW() , :ip)';
        $req   = $cnx->prepare($sql);
        $req->execute($query);
    }


}

echo $nb_jaimes;


?>