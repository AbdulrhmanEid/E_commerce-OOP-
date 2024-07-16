<?php 
include_once('../Classes/Product.php');

$id = $_POST['id'];
$product_name = $_POST['name'];
$product_price = $_POST['price'];
$product_quantity = $_POST['quantity'];
$product_description= $_POST['description'];

$product = new Product(); 
$product->updateProduct($id, $product_name, $product_price, $product_quantity, $product_description);

header("Location: ../details.php?pid=$id");

