<?php

    include_once('connection.php');

    $nb = $_POST['nb'];
    $name = $_POST['name'];
    $spek = $_POST['spek'];
    $harga = $_POST['harga'];
                         
    $statement = $conn->prepare('UPDATE laptop SET nb=:nb, 
	                                            name=:name,
                                                spek=:spek,
                                                harga=:harga
                                                WHERE nb=:nb');                            
    $statement->execute([
        'nb' => $nb,
		'name' => $name,
        'spek' => $spek,
        'harga' => $harga,
        'nb' => $nb
    ]);

    header('location: databarang.php');
?>