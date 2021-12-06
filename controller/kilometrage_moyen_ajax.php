<?php
include('../connect_bdd.php');
$result = pg_fetch_all(pg_query($conn, "SELECT kilometrage_moyen()"));
echo json_encode($result);
?>