<?php

    include_once('connection.php');
    $nb = $_POST['nb'];
    $name = $_POST['name'];
    $email = $_POST['spek'];
    $phone = $_POST['harga'];

    $statement = $conn->prepare('INSERT INTO laptop (nb, name, spek, harga)
                                            VALUES (:nb, :name, :spek, :harga)');
                                
    $statement->execute([
        'nb' => $nb,
		'name' => $name,
        'spek' => $email,
        'harga' => $phone
    ]);

    header('location: databarang.php');