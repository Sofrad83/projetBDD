<?php
    include('../connect_bdd.php');

    $vendeurs_id = array_column(pg_fetch_all(pg_query($conn, 'select id_vend from public."Vendeur"')), "id_vend");

    if(is_numeric($_POST['id_vend'])){
        if(in_array($_POST['id_vend'], $vendeurs_id)){
            echo json_encode([
                'error' => 1,
                'message' => "L'id existe déjà"
            ]);
            return 0;
        }
        $tab_insert = [
            'id_vend' => $_POST['id_vend'],
            'nom_vend' => $_POST['nom_vend'],
            'prenom_vend' => $_POST['prenom_vend'],
            'ville_vend' => $_POST['ville_vend'],
            'pays_vend' => $_POST['pays_vend'],
            'adresse_vend' => $_POST['adresse_vend']
        ];
        pg_insert($conn, 'Vendeur', $tab_insert);
        echo json_encode([
            'error' => 0,
            'message' => "Vendeur inséré en base."
        ]);
    }else{
        echo json_encode([
            'error' => 1,
            'message' => "L'id doit être un nombre"
        ]);
    }
?>