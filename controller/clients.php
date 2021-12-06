<?php
$clients = pg_fetch_all(pg_query($conn, 'select * from public."Client" order by id_cli asc'));
?>