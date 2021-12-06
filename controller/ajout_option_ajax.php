<?php
include('../connect_bdd.php');

$req = 'select * from "Voiture_has_Option" where id_voit = '.$_POST['id_voit'].' and id_opt = ' .$_POST['id_opt'];
$exist = pg_fetch_all(pg_query($conn, $req));
if($exist != false){
    $retour = [
        'error' => 1,
    ];
    echo json_encode($retour);
}else{
    $tab = [
        'id_voit' => $_POST['id_voit'],
        'id_opt' => $_POST['id_opt']
    ];
    pg_insert($conn, "Voiture_has_Option", $tab);
    $cmd = pg_fetch_all(pg_query($conn, 'select * from "Commande" where id_cmd = (select id_cmd from "Neuve" where id_voit = '.$_POST['id_voit'].')'));
    $retour = [
        'error' => 0,
        'cmd' => $cmd
    ];
    echo json_encode($retour);
}
?>