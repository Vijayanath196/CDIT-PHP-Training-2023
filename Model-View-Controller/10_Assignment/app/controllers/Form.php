<?php 

class Form extends Controller{


    private $productModel;
    public function __construct() {
        $this->productModel = $this->model('Products');
    }
    
    public function form(){  
       $this->view('pages/form','');
    }
    public function submit(){
        $product = $this->productModel->setProduct();
       if($product){
       echo "<script>alert('inserted succesfully')
       document.location='/customer';</script>";
   
    
    }
    else{
        echo "<script>alert('insertion failed')document.location='/form/form';</script>";  
    }
       
    }

    public function delete($cusid){  
        $products = $this->productModel->delProduct($cusid);
        if($products){
            echo "<script>alert('deleted succesfully')
            document.location='/customer';</script>";
            // $customers = $this->customerModel->getCustomer();
            // $data=[ 
            //         'customers' => $customers];
            // $this->view('pages/home',$data);
         }
         else{
            echo "<script>alert('insertion failed')document.location='/customer';</script>";
           
        }
        
     }

    // public function add($name){
    //     echo "Customer \t".$name."\t is added";
        
    // }
}

