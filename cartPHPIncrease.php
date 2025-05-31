<?php


$goodIdCount = $_POST['data'] ?? null;


if (!$goodIdCount) {
    echo "Missing userId or goodId";
    exit;
}

$conn = mysqli_connect("localhost", "admin", "admin", "phoneShop");
if ($conn) {
    $query = "UPDATE allgoods SET count = count + 1 WHERE id='$goodIdCount'";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
}


?>