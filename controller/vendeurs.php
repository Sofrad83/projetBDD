<?php
$vendeurs = pg_fetch_all(pg_query($conn, 'select * from public."Vendeur" order by id_vend asc'));
?>