<?php

include('connection.php');

$stmt=$conn->prepare("SELECT * FROM products");
$stmt->execute();

$products = $stmt->get_result();

?>