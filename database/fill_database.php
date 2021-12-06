<?php
include('../connect_bdd.php');

$clients = [
    ['id_cli' => 1, 'nom_cli' => "CUINET", 'prenom_cli' => "Maxence", 'pays_cli' => "France", 'ville_cli' => "Fréjus", 'adresse_cli' => "123 Rue de l'avenue"],
    ['id_cli' => 2, 'nom_cli' => "RADJAH", 'prenom_cli' => "Sofiane", 'pays_cli' => "France", 'ville_cli' => "Toulon", 'adresse_cli' => "123 Rue de l'avenue"],
    ['id_cli' => 3, 'nom_cli' => "CANTOGREL", 'prenom_cli' => "Hugo", 'pays_cli' => "Suisse", 'ville_cli' => "Geneve", 'adresse_cli' => "123 Rue de l'avenue"],
    ['id_cli' => 4, 'nom_cli' => "DAUMAS", 'prenom_cli' => "Thomas", 'pays_cli' => "Belgique", 'ville_cli' => "Bruxelles", 'adresse_cli' => "123 Rue de l'avenue"],
    ['id_cli' => 5, 'nom_cli' => "BURGARD", 'prenom_cli' => "Mathieu", 'pays_cli' => "France", 'ville_cli' => "Paris", 'adresse_cli' => "123 Rue de l'avenue"]
];

$vendeurs = [
    ['id_vend' => 1, 'nom_vend' => "CUINET", 'prenom_vend' => "Phillipe", 'pays_vend' => "France", 'ville_vend' => "Toulon", 'adresse_vend' => "123 Rue de l'avenue"],
    ['id_vend' => 2, 'nom_vend' => "CANTOGREL", 'prenom_vend' => "Maxence", 'pays_vend' => "France", 'ville_vend' => "Fréjus", 'adresse_vend' => "123 Rue de l'avenue"],
    ['id_vend' => 3, 'nom_vend' => "DAUMAS", 'prenom_vend' => "Clément", 'pays_vend' => "France", 'ville_vend' => "Marseille", 'adresse_vend' => "123 Rue de l'avenue"],
    ['id_vend' => 4, 'nom_vend' => "RADJAH", 'prenom_vend' => "Ryan", 'pays_vend' => "France", 'ville_vend' => "Lille", 'adresse_vend' => "123 Rue de l'avenue"],
    ['id_vend' => 5, 'nom_vend' => "BURGARD", 'prenom_vend' => "Roman", 'pays_vend' => "France", 'ville_vend' => "Nantes", 'adresse_vend' => "123 Rue de l'avenue"]
];

$marques = [
    ['id_marq' => 1, 'nom_marq' => "Audi"],
    ['id_marq' => 2, 'nom_marq' => "Peugeot"],
    ['id_marq' => 3, 'nom_marq' => "Renault"],
    ['id_marq' => 4, 'nom_marq' => "Mercedes"],
    ['id_marq' => 5, 'nom_marq' => "BMW"]
];

$modeles = [
    ['id_mod' => 1, 'nom_mod' => "A6", 'id_marq' => 1],
    ['id_mod' => 2, 'nom_mod' => "RS3 Berline", 'id_marq' => 1],
    ['id_mod' => 3, 'nom_mod' => "208 RC", 'id_marq' => 2],
    ['id_mod' => 4, 'nom_mod' => "3008 GTLine", 'id_marq' => 2],
    ['id_mod' => 5, 'nom_mod' => "Clio", 'id_marq' => 3],
    ['id_mod' => 6, 'nom_mod' => "Megane", 'id_marq' => 3],
    ['id_mod' => 7, 'nom_mod' => "GLE AMG", 'id_marq' => 4],
    ['id_mod' => 8, 'nom_mod' => "A45 AMG", 'id_marq' => 4],
    ['id_mod' => 9, 'nom_mod' => "M8 Competition", 'id_marq' => 5],
    ['id_mod' => 10, 'nom_mod' => "M135i", 'id_marq' => 5]
];

$voitures_type = [
    ['id_voit_type' => 1, 'nom_voit_type' => "SUV"],
    ['id_voit_type' => 2, 'nom_voit_type' => "Citadine"],
    ['id_voit_type' => 3, 'nom_voit_type' => "Sportive"],
    ['id_voit_type' => 4, 'nom_voit_type' => "Berline"]
];

$options = [
    ['id_opt' => 1, 'nom_opt' => "Sièges chauffant", 'prix_opt' => 2000],
    ['id_opt' => 2, 'nom_opt' => "Jantes chromées", 'prix_opt' => 4000],
    ['id_opt' => 3, 'nom_opt' => "Sécurité antivol", 'prix_opt' => 1500]
];

$modeles_has_options = [
    ['id_mod' => 1, 'id_opt' => 1],
    ['id_mod' => 1, 'id_opt' => 2],
    ['id_mod' => 1, 'id_opt' => 3],

    ['id_mod' => 2, 'id_opt' => 1],
    ['id_mod' => 2, 'id_opt' => 2],
    
    ['id_mod' => 3, 'id_opt' => 1],
    ['id_mod' => 3, 'id_opt' => 2],
    ['id_mod' => 3, 'id_opt' => 3],

    ['id_mod' => 4, 'id_opt' => 3],
    
    ['id_mod' => 5, 'id_opt' => 1],
    ['id_mod' => 5, 'id_opt' => 3],
    
    ['id_mod' => 6, 'id_opt' => 1],
    ['id_mod' => 6, 'id_opt' => 2],
    ['id_mod' => 6, 'id_opt' => 3],
    
    ['id_mod' => 7, 'id_opt' => 1],
    ['id_mod' => 7, 'id_opt' => 2],
    ['id_mod' => 7, 'id_opt' => 3],
    
    ['id_mod' => 8, 'id_opt' => 1],
    ['id_mod' => 8, 'id_opt' => 2],
    ['id_mod' => 8, 'id_opt' => 3],
    
    ['id_mod' => 9, 'id_opt' => 1],
    ['id_mod' => 9, 'id_opt' => 2],
    ['id_mod' => 9, 'id_opt' => 3],
    
    ['id_mod' => 10, 'id_opt' => 1],
    ['id_mod' => 10, 'id_opt' => 2],
    ['id_mod' => 10, 'id_opt' => 3]
];

$neuves = [
    ['id_voit' => 1, 'prix_voit' => rand(15000, 150000), 'date_construct_voit' => "2015-03-01 00:00:00", 'id_voit_type' => 1, 'energie_voit' => "Essence", 'kilometrage_voit' => rand(150, 2500), 'couleur_base' => "Blanc", 'prix_base' => rand(15000, 150000), 'id_mod' => 1, 'id_cli' => 2, 'id_vend' => null, 'id_cmd' => 1],
    ['id_voit' => 2, 'prix_voit' => rand(15000, 150000), 'date_construct_voit' => "2017-04-01 00:00:00", 'id_voit_type' => 2, 'energie_voit' => "Diesel", 'kilometrage_voit' => rand(150, 2500), 'couleur_base' => "Noir", 'prix_base' => rand(15000, 150000), 'id_mod' => 2, 'id_cli' => null, 'id_vend' => 1, 'id_cmd' => 2]
];

$occas = [
    ['id_voit' => 3, 'prix_voit' => rand(15000, 150000), 'date_construct_voit' => "2015-03-01 00:00:00", 'id_voit_type' => 1, 'energie_voit' => "Essence", 'kilometrage_voit' => rand(50000, 100000), 'immatriculation' => "954 BHB 83", 'couleur' => "Rouge", 'date_premiere_mise_circulation' => "2012-03-01 00:00:00", 'id_mod' => 3, 'id_cli' => 1, 'id_vend' => null, 'id_cmd' => 3],
    ['id_voit' => 4, 'prix_voit' => rand(15000, 150000), 'date_construct_voit' => "2017-04-01 00:00:00", 'id_voit_type' => 2, 'energie_voit' => "Diesel", 'kilometrage_voit' => rand(50000, 100000), 'immatriculation' => "683 BHB 75", 'couleur' => "Vert", 'date_premiere_mise_circulation' => "2012-04-01 00:00:00", 'id_mod' => 4, 'id_cli' => null, 'id_vend' => 1, 'id_cmd' => null]
];


$commandes = [
    ['id_cmd' => 1, 'date_cmd' => "2021-07-01 00:00:00", 'prix_total_cmd' => 0, 'id_cli' => 3],
    ['id_cmd' => 2, 'date_cmd' => "2021-07-01 00:00:00", 'prix_total_cmd' => 0, 'id_cli' => 4],
    ['id_cmd' => 3, 'date_cmd' => "2021-07-01 00:00:00", 'prix_total_cmd' => 0, 'id_cli' => 5],
];

$voitures_has_option = [
    ['id_voit' => 1, 'id_opt' => 2],
    ['id_voit' => 2, 'id_opt' => 1],
    ['id_voit' => 3, 'id_opt' => 1],
    ['id_voit' => 3, 'id_opt' => 2]
];

pg_query($conn, 'DELETE FROM public."Voiture_has_Option"');
pg_query($conn, 'DELETE FROM public."Commande"');
pg_query($conn, 'DELETE FROM public."Occasion"');
pg_query($conn, 'DELETE FROM public."Neuve"');
pg_query($conn, 'DELETE FROM public."Modele_has_Option"');
pg_query($conn, 'DELETE FROM public."Option"');
pg_query($conn, 'DELETE FROM public."Voiture_Type"');
pg_query($conn, 'DELETE FROM public."Modele"');
pg_query($conn, 'DELETE FROM public."Marque"');
pg_query($conn, 'DELETE FROM public."Vendeur"');
pg_query($conn, 'DELETE FROM public."Client"');

echo "Toutes les données ont été supprimées. ";


foreach($clients as $c){
    pg_insert($conn, "Client", $c);
}
foreach($vendeurs as $v){
    pg_insert($conn, "Vendeur", $v);
}
foreach($marques as $m){
    pg_insert($conn, "Marque", $m);
}
foreach($modeles as $m){
    pg_insert($conn, "Modele", $m);
}
foreach($voitures_type as $v){
    pg_insert($conn, "Voiture_Type", $v);
}
foreach($options as $o){
    pg_insert($conn, "Option", $o);
}
foreach($modeles_has_options as $m){
    pg_insert($conn, "Modele_has_Option", $m);
}
foreach($neuves as $n){
    pg_insert($conn, "Neuve", $n);
}
foreach($occas as $o){
    pg_insert($conn, "Occasion", $o);
}
foreach($commandes as $c){
    pg_insert($conn, "Commande", $c);
}
foreach($voitures_has_option as $v){
    pg_insert($conn, "Voiture_has_Option", $v);
}

echo "Le jeu de données a été inséré";

?>