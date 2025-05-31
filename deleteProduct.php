<?php


$userId = $_POST['userId'] ?? null;
$goodId = $_POST['goodId'] ?? null;

if (!$userId || !$goodId) {
    echo "Missing userId or goodId";
    exit;
}


$conn = mysqli_connect("localhost", "admin", "admin", "phoneShop");
if ($conn) {
    $query = "DELETE FROM goods WHERE userId='$userId' AND goodId='$goodId'";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
}


?>