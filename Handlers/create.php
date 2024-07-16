<?php 
require_once('../Classes/Product.php');

$product_name = $_POST['name'];
$product_price = $_POST['price'];
$product_quantity = $_POST['quantity'];
$product_description = $_POST['description'];


$product = new Product();
$product->creatProduct($product_name ,$product_price,$product_quantity,$product_description);