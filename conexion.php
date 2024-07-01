<?php

$mysqli = new mysqli("localhost", "root", "", "costo_produccion");

if ($mysqli->connect_errno) {
    die("error de conexión: " . $mysqli->connect_error);
 }
