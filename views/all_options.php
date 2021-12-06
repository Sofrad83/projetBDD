<?php
include('../connect_bdd.php');
include('../controller/all_options.php');
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
                                <h2>Concession auto - Options par modèle</h2>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-2">
                                        <label for="choix_mod">Choix du modèle :</label>
                                        <select id="choix_mod" class="form form-control">
                                            <?php
                                                foreach($modele as $m){
                                                    echo '<option value="'.$m['id_mod'].'">'.$m['nom_mod'].' ('.$m['nom_marq'].')</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-2 d-flex align-items-end">
                                        <button class="btn btn-success" id="btn_voir_all_options">Voir les options dispo</button>
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