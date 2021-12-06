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
                        <div class="card-header row">
                            <div class="col">
                                <h2>Concession auto - Liste des véhicules</h2>
                            </div>
                            <div class="col-2 d-flex flex-row-reverse">
                                <button class="btn btn-outline-info" id="add_vendeur">Ajouter un véhicule</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4>Voitures Neuves</h4>
                            <hr>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Marque</th>
                                        <th>Modèle</th>
                                        <th>Prix</th>
                                        <th>Date de construction</th>
                                        <th>Type de Voiture</th>
                                        <th>Energie</th>
                                        <th>Kilométrage</th>
                                        <th>Couleur</th>
                                        <th>Prix Constructeur</th>
                                        <th>Type Vendeur</th>
                                        <th>Vendeur</th>
                                        <th>Commandée ?</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($neuves as $v){
                                            echo "<tr>";
                                            echo "<td>".$v['id_voit']."</td>";
                                            echo "<td>".$v['nom_marq']."</td>";
                                            echo "<td>".$v['nom_mod']."</td>";
                                            echo "<td>".$v['prix_voit']."</td>";
                                            echo "<td>".$v['date_construct_voit']."</td>";
                                            echo "<td>".$v['nom_voit_type']."</td>";
                                            echo "<td>".$v['energie_voit']."</td>";
                                            echo "<td>".$v['kilometrage_voit']."</td>";
                                            echo "<td>".$v['couleur_base']."</td>";
                                            echo "<td>".$v['prix_base']."</td>";
                                            echo $v['id_cli'] == null ? "<td>Vendeur</td>" : "<td>Client</td>";
                                            echo $v['id_cli'] == null ? "<td>".$v['nom_vend']." ".$v['prenom_vend']."</td>" : "<td>".$v['nom_cli']." ".$v['prenom_cli']."</td>";
                                            echo $v['id_cmd'] == null ? "<td>Non</td>" : "<td>Oui</td>";
                                            echo "</tr>";
                                        }
                                    ?>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include('../views/partials/modal-add-vendeur.php')
    ?>
</body>
<script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="/plugins/jquery-3.6.0.min.js"></script>
<script src="/ressources/js/script.js"></script>
</html>