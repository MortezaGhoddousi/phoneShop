<?php

$userId = $_POST['userId'] ?? null;
$goodId = $_POST['goodId'] ?? null;
$goodIdCount = $_POST['data'] ?? null;


if (!$userId || !$goodId) {
    echo "Missing userId or goodId";
    exit;
}

$conn = mysqli_connect("localhost", "admin", "admin", "phoneShop");
if ($conn) {
    $query = "INSERT INTO goods (userId, goodId) VALUES ('$userId', '$goodId')";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
}


?>