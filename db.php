<?php

    $hostname = "localhost";
    $usuariodb = "root";
    $passworddb = "";
    $dbname = "concesionario";

    $conectar = mysqli_connect($hostname,$usuariodb,$passworddb,$dbname);

    if (!$conectar ) {
        echo "Error: No se pudo conectar a MySQL.";
        echo "errno de depuración: " . mysqli_connect_errno();
        echo "error de depuración: " . mysqli_connect_error();
        exit;
    }
    