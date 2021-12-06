<?php
include('../connect_bdd.php');
$date_d = $_POST['date_d'];
$date_f = $_POST['date_f'];

$stats = pg_fetch_all(pg_query($conn, "SELECT vente_voiture('".$date_d." 00:00:00', '".$date_f." 23:59:59')"));
echo json_encode($stats);
?>