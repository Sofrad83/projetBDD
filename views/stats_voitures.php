<?php
include('../connect_bdd.php');
include('../controller/voitures.php');

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
                                <h2>Concession auto - Stats ventes des véhicules</h2>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-2">
                                        <label for="date_debut">Date début :</label>
                                        <input type="date" class="form form-control" id="date_debut" autocomplete="off" value="2021-07-01">
                                    </div>
                                    <div class="col-2">
                                        <label for="date_fin">Date fin : </label>
                                        <input type="date" class="form form-control" id="date_fin" autocomplete="off" value="2021-07-30">
                                    </div>
                                    <div class="col-2 d-flex align-items-end">
                                        <button class="btn btn-success" id="btn_voir_stats">Voir stats</button>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="/plugins/jquery-3.6.0.min.js"></script>
<script src="/ressources/js/script.js"></script>
</html>