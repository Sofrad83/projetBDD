<?php
include('../connect_bdd.php');
$modele = $_POST['id_mod'];
$options = pg_fetch_all(pg_query($conn, "SELECT * FROM all_options(".$modele.") tmp(id_opt integer, nom_opt varchar, prix_opt numeric)"));
$result = [
    'nom_mod' => $_POST['nom_mod'],
    'options' => $options
];
echo json_encode($result);
?>