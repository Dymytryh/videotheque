<?php

function get_db() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "videotheque";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function close_db(&$conn)
{
    $conn->close();
}
