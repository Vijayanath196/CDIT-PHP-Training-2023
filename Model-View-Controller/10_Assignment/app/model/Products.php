<?php
class Products{

private $db;
// private $name;
// private $address;
// private $phoneNumber;
public function __construct(){
  $this->db = new Database;
}
public function getProduct(){
    $this->db->query("SELECT * FROM products");
    return $this->db->resultSet();  
  }
  public function setProduct(){
    
    $product_name=$_POST['product_name'];
    $product_description=$_POST['product_description'];
    $product_price=$_POST['product_price'];
    
    $query="INSERT INTO products (product_name,product_description,product_price) 
    VALUES (' $product_name', '$product_description', '$product_price')";
    $this->db->query($query);

    return $this->db->execute( );
    
  }

  public function delProduct($cusid){
    
    //$cusid=$_POST['cusid']; 
   // echo"<br>".$cusid;
    $query="DELETE FROM products WHERE product_id= $cusid";
    // echo $query;
    $this->db->query($query);

    return $this->db->execute( );
    
  }
}