<?php  
include_once('Connection.php');

//instance From Connection Class 


class HandleDb extends Connection
{
    protected $query ; 

    

    protected function handleGetProductsQuery($query)
    {
         $this->query = $query ;
         $connection = $this->connect() ;
         $stat = $connection->prepare($query);   
         $stat->execute();
         $result = $stat->fetchAll();
         return $result ;
        

    }

    protected function handleGetProductByIdQuery($query , $id)
    {
        $this->query = $query ;
        $connection = $this->connect() ;
        $stat = $connection->prepare($query);
        $stat->execute([$id]);
        $result = $stat->fetch();
        return $result ;
    }

    protected function handleAddproductQuery($query ,$name , $price ,$quantity ,$description)
    {
        $this->query = $query ; 
        $connection = $this->connect();
        $stat = $connection->prepare($query);
        $stat->execute([$name , $price , $quantity , $description]);
        return true ;
    }
    protected function handleupdateproductQuery($query ,$name , $price ,$quantity ,$description,$id)
    {
        $this->query = $query ; 
        $connection  = $this->connect();
        $stat = $connection->prepare($query);
        $stat->execute([$name , $price , $quantity , $description ,$id]);
        return true ;
    }

    protected function handleDeleteQuery($query , $id)
    {
        $this->query = $query ;
        $connection = $this->connect() ;
        $stat = $connection->prepare($query);
        $stat->execute([$id]);
        return true ;

    }
}







