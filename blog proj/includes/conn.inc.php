<?php
$server = "localhost";
$dbname = "id18130439_tvl_diaries";
$username = "id18130439_root";
$password = "%oD9EKFx4~a+mGdF";

try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}