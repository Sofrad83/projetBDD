<?php
include('connect_bdd.php')
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
                            <h2>Concession auto</h2>
                        </div>
                        <div class="card-body">
                            <p>Cette page permet la gestion d'une concession automobile. Choisissez une option :</p>
                            <br>
                            <ul>
                                <li><a href="/database/fill_database.php">Supprimer et recréer la base de donnée (S'execute dès le clique)</a></li>
                                <li><a href="/views/clients.php">Voir la liste des clients</a></li>
                                <li><a href="/views/vendeurs.php">Voir la liste des vendeurs</a></li>
                                <li><a href="/views/voitures.php">Voir la liste des véhicules</a></li>
                                <li><a href="/views/stats_voitures.php">Voir les stats des ventes des voitures (Fonctions PLSQL -> statVenteVoiture())</a></li>
                                <li><a href="/views/all_options.php">Voir toutes les options disponibles par modèle (Fonctions PLSQL -> all_options())</a></li>
                                <li><a href="" id="kilometrage_moyen">Voir le kilométrage moyen de tout les véhicules de la concession (Fonctions PLSQL -> kilometrage_moyen())</a></li>
                                <li><a href="/views/ajout_options.php">Ajouter une options à un véhicule (Triggers PLSQL -> ajout_options())</a></li>
                            </ul>
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