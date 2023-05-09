<?php

include("connection.php");

$stmt = $conn->prepare("SELECT * FROM products");
$stmt->execute();
$products = $stmt->get_result();

$stmt2 = $conn->prepare("SELECT * FROM products LIMIT 8");
$stmt2->execute();
$products2 = $stmt2->get_result();

$stmt3 = $conn->prepare("SELECT * FROM products LIMIT 8, 8");
$stmt3->execute();
$products3 = $stmt3->get_result();

$stmt4 = $conn->prepare("SELECT * FROM products LIMIT 16, 3");
$stmt4->execute();
$products4 = $stmt4->get_result();

$stmt5 = $conn->prepare("SELECT * FROM products LIMIT 16");
$stmt5->execute();
$products5 = $stmt5->get_result();

$stmt6 = $conn->prepare("SELECT * FROM products LIMIT 4");
$stmt6->execute();
$products6 = $stmt6->get_result();

?>