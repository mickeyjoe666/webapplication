<?php
$conn = pg_connect ("host=localhost dbname=j543210a user=j543210a");
$query = "INSERT INTO member (login_name,passwd) VALUES($1, $2)";
$result = pg_prepare ($conn, "my_query", $query);
$result = pg_execute ($conn, "my_query", array("ohshima","pohshima"));
?>