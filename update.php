<?php 
include_once("Inc/nav.php");
include_once('Classes/Product.php');
$product_id = $_GET['pid'];
$product = new Product();
$product = $product->getProductByID($product_id);
?>
<section>
    <div class="container my-5">
        <h1 class="text-center mb-3 text-success">Welcome To Our Update Product Page</h1>
        <form action="handlers/update.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
             <input type="hidden" name="id" value="<?=$product['id']?>">
             <label class="form-label">Product Name</label>
             <input type="text" class="form-control" name="name" value="<?=$product['name']?>">
          </div>
          <div class="mb-3">
             <label class="form-label">Product Price</label>
             <input type="text" class="form-control" name="price" value="<?=$product['price']?>">
          </div>
          <div class="mb-3">
             <label class="form-label">Product Quantity</label>
             <input type="text" class="form-control" name="quantity"  value="<?=$product['quantity']?>">
          </div>
          <div class="mb-3">
             <label class="form-label">Product Description</label>
             <textarea type="text" class="form-control" name="description" ><?=$product['description']?>"</textarea>
          </div>
          <div class="mb-3">
             <button type="submit" name="add-btn" class="btn btn-success">Update Peoduct</button>
          </div>
        </form>
    </div>
</section>
<?php 
include_once("Inc/footer.php");
?>