<?php

include_once '../connect/connect.php';

if (isset($_GET['motclef'])) {

    $motclef = $_GET['motclef'];
    $query   = array('motclef' => $motclef . '%');
    $sql     = 'SELECT title, message  FROM blog WHERE title LIKE :motclef OR message LIKE :motclef';
    $req     = $cnx->prepare($sql);
    $req->execute($query);
    $count = $req->rowCount($sql);

    if ($count == 1) {

        while ($result = $req->fetch(PDO::FETCH_OBJ)) {
            echo "<li><a href='#'>Titre: " . $result->title . "</a></li><li><a href='#'> Message: " . $result->message."</a></li>";
        }
    } else {

        echo " <li><a href='#'>Aucun resultat pour: " . $motclef."</a></li>";
    }

}

?>