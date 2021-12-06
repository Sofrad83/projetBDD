<?php
$modele = pg_fetch_all(pg_query($conn, 'SELECT * FROM public."Modele" LEFT JOIN public."Marque" on public."Modele".id_marq = public."Marque".id_marq ORDER BY public."Modele".id_marq ASC'));
?>