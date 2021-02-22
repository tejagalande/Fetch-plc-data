<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "plcdb";

    $conn = new mysqli($server, $user, $password, $database);

    if($conn->connect_errno){
        die("connection failed:". $conn->connect_errno);
    }

    //echo "Connection Successfully";
