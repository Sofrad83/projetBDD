<?php
include('../connect_bdd.php');
include('../controller/vendeurs.php');
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
                                <h2>Concession auto - Liste des vendeurs</h2>
                            </div>
                            <div class="col-2 d-flex flex-row-reverse">
                                <button class="btn btn-outline-info" id="add_vendeur">Ajouter un vendeur</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Pays</th>
                                        <th>Ville</th>
                                        <th>Adresse</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($vendeurs as $v){
                                            echo "<tr>";
                                            echo "<td>".$v['id_vend']."</td>";
                                            echo "<td>".$v['nom_vend']."</td>";
                                            echo "<td>".$v['prenom_vend']."</td>";
                                            echo "<td>".$v['pays_vend']."</td>";
                                            echo "<td>".$v['ville_vend']."</td>";
                                            echo "<td>".$v['adresse_vend']."</td>";
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