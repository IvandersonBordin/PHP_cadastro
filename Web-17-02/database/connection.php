<?php

$host = "127.0.0.1";
$user = "postgres";
$password = "root";

$database = "empresa";

$dsn = "pgsql:dbname={$database};host={$host}";

try {

    $connection = new PDO($dsn, $user, $password);
} catch (\Exception $e) {
    echo $e->getMessage();
}
