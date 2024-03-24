<?php

if (!function_exists('connectToDB')) {
    function connectToDB()
    {
        $servername = "db177.pair.com";
        $username = "o2d3_2";
        $password = "WZym8FwQnaawUCEn";
        $dbname = "o2d3_pg";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
}
