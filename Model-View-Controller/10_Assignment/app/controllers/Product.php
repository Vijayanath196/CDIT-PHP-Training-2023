<?php 

class Product extends Controller{


    private $productModel;
    public function __construct() {
        $this->productModel = $this->model('Products');
    }
    public function index(){
        $product = $this->productModel->getProduct();
       $data=[ 'title' => 'Welcome',
               'products' => $product];
        
      
       $this->view('pages/home',$data);
    }
    public function form(){
        $product = $this->productModel->getProduct();
       $data=[ 
               'products' => $product];
        
      
       $this->view('pages/form',$data);
    }

    // public function add($name){
    //     echo "Customer \t".$name."\t is added";
        
    // }
}

