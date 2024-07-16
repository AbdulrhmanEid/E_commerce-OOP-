<?php 
include_once("Inc/nav.php");
?>
<section>
    <div class="container my-5">
        <h1 class="text-center mb-3 text-primary">Welcome To Our Create New Product Page</h1>
        <form action="handlers/create.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
             <label class="form-label">Product Name</label>
             <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
             <label class="form-label">Product Price</label>
             <input type="text" class="form-control" name="price">
          </div>
          <div class="mb-3">
             <label class="form-label">Product Quantity</label>
             <input type="text" class="form-control" name="quantity">
          </div>
          <div class="mb-3">
             <label class="form-label">Product Description</label>
             <textarea type="text" class="form-control" name="description"></textarea>
          </div>
          <div class="mb-3">
             <button type="submit" name="add-btn" class="btn btn-primary">Add Peoduct</button>
          </div>
        </form>
    </div>
</section>
<?php 
include_once("Inc/footer.php");
?>