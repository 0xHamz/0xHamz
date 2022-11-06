<?php

    include_once('connection.php');

    $nb = $_GET['nb'];

    $statement = $conn->prepare('DELETE FROM laptop WHERE nb=:nb');                             
    $statement->execute([
        'nb' => $nb
    ]);

    header('location: databarang.php');