<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "jewel";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // $sql = "SELECT * FROM users";
    // $result = $conn->query($sql);
?>