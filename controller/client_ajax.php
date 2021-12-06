<?php
    include('../connect_bdd.php');

    $clients_id = array_column(pg_fetch_all(pg_query($conn, 'select id_cli from public."Client"')), "id_cli");

    if(is_numeric($_POST['id_cli'])){
        if(in_array($_POST['id_cli'], $clients_id)){
            echo json_encode([
                'error' => 1,
                'message' => "L'id existe déjà"
            ]);
            return 0;
        }
        $tab_insert = [
            'id_cli' => $_POST['id_cli'],
            'nom_cli' => $_POST['nom_cli'],
            'prenom_cli' => $_POST['prenom_cli'],
            'ville_cli' => $_POST['ville_cli'],
            'pays_cli' => $_POST['pays_cli'],
            'adresse_cli' => $_POST['adresse_cli']
        ];
        pg_insert($conn, 'Client', $tab_insert);
        echo json_encode([
            'error' => 0,
            'message' => "Client inséré en base."
        ]);
    }else{
        echo json_encode([
            'error' => 1,
            'message' => "L'id doit être un nombre"
        ]);
    }
?>