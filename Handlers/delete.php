<?php 
require_once('../Classes/Product.php');

$product_id = $_GET['pid'];

$product = new Product();
$product ->deleteProduct($product_id);

header('location:../index.php');
