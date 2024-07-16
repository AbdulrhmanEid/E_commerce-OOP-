<?php
 include_once('Inc/nav.php');
 require_once('Classes/Product.php');
 $product = new Product();
 $products = $product->getProducts();
?>

<div class="container my-5">
    <h2 class="text-primary text-center my-5" >Our Latest Products </h2>
    <div class="row">
        <?php foreach($products as $product ) {?>
        <div class="col-md-4 mt-4">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$product['name'] ?></h5>
                <h5 class="card-title"><?=$product['price'] . "$" ?></h5>
                <p class="card-text"><?= $product ['description']?></p>
                <a href="details.php?pid=<?=$product['id']?>" class="btn btn-primary">Details</a>
                <a href="update.php?pid=<?=$product['id']?>" class="btn btn-warning">Edit</a>
                <a href="Handlers/delete.php?pid=<?=$product['id']?>" class="btn btn-danger">Delete</a>
            </div>
        </div>
        </div>
        <?php }?>
    </div>
</div>

<?php
 include_once('Inc/footer.php');?>