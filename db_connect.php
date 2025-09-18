<?php
function connectDB() {
    $host = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "testdb";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
    }

    $conn->set_charset("utf8");
    return $conn;
}
?>