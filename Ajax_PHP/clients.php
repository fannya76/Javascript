<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=test_ajax', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
 catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

$query = $pdo->query('SELECT * FROM `client`');

$tab_clients = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($tab_clients);

?>