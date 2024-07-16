<?php
include_once('Inc/nav.php');
include_once('Classes/Product.php');
$product_id = $_GET['pid'];
$product = new Product();
$product = $product->getProductByID($product_id);

?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
        </div>
        <div class="col-md-6">
            <h2>Product Details</h2>
            <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"> Name :<?= $product['name']?> </h5>
                <h5 class="card-title"> Price:<?=$product['price']?> $ </h5>
                <h5 class="card-title"> quantity:<?=$product['quantity']?>   </h5>
                <p class="card-text"><?= $product['description'] ?></p>
            </div>
        </div>
        </div>
     </div>
    </div>
</div>
<?php
include_once('Inc/footer.php');
?>