<?php
include('../connect_bdd.php');
include('../controller/ajout_options.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IHM - Cours BDD</title>
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/ressources/css/index.css" rel="stylesheet">
</head>
<body class="bg-body">
    <br>
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <div class="col">
                                <h2>Concession auto - Ajouter une option</h2>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-2">
                                        <label for="choix_voiture">Choix du véhicule :</label>
                                        <select id="choix_voiture" class="form form-control">
                                            <?php
                                                foreach($neuves as $n){
                                                    echo '<option value="'.$n['id_voit'].'">'.$n['nom_marq'].' '.$n['nom_mod'].' (ID : '.$n['id_voit'].')</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <label for="choix_option">Choix de l'option :</label>
                                        <select id="choix_option" class="form form-control">
                                            <?php
                                                foreach($options as $o){
                                                    echo '<option value="'.$o['id_opt'].'">'.$o['nom_opt'].'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-2 d-flex align-items-end">
                                        <button class="btn btn-success" id="btn_ajout_option">Ajouter l'option</button>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include('../views/partials/modal-all_options.php')
    ?>
</body>
<script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="/plugins/jquery-3.6.0.min.js"></script>
<script src="/ressources/js/script.js"></script>
</html>