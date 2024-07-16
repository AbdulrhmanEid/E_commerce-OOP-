<?php 

include_once('HandleDb.php');


Class Product extends HandleDb 
{
    public function getProducts() 
    {
         $query = "SELECT * FROM products order by id  desc limit 3";
         $products = $this->handleGetProductsQuery($query);
         return $products ;
       

    }
    public function getProductByID($id)
    {
        $query = "SELECT * FROM products Where id = ?";
        $product = $this->handleGetProductByIdQuery($query,$id);
        return $product ; 

    } 
    
    public function creatProduct($product_name ,$product_price,$product_quantity,$product_description)
    {
        $query = "INSERT into products ( name, price, quantity, description) values(?,?,?,?)";
        $this->handleAddproductQuery($query,$product_name ,$product_price,$product_quantity,$product_description);
        return  header('location:../index.php');
    

    }
    public function updateProduct( $id,$product_name ,$product_price,$product_quantity,$product_description)
    {
        $query ="UPDATE products set name = ?, price =?, quantity=?, description=? WHERE id= ?";
        $this->handleupdateproductQuery($query,$product_name ,$product_price,$product_quantity,$product_description,$id);
        
       
    

    }

    public function deleteProduct($id)
    {
          
         $delete_product_query = "DELETE FROM products WHERE id = ?";
         $this->handleDeleteQuery($delete_product_query ,$id) ;
         return  header('location:../index.php');
     
    
    }


}