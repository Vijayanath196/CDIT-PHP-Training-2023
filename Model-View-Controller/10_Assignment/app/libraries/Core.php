<?php
//error_reporting(E_ERROR | E_PARSE);
class Core{

    protected $currentController='Customer';
    protected $currentMethod='index';
    protected $params=[];

    public function __construct() {
      $url= $this->getUrl();
        if(file_exists('../app/controllers/'.ucwords($url[0]).'.php')){

            $this->currentController=ucwords($url[0]);
            require_once '../app/controllers/'.$this-> currentController.'.php';
           
            $this->currentController=new $this->currentController;
            
            unset($url[0]);
            if(isset($url[1])){
            if(method_exists($this-> currentController,$url[1]))
            {
                 $this->currentMethod =$url[1]; 
                //$currentMethod =$url[1];
                if(isset($url[2])){
               $this->params =$url[2] ;
                //$this->currentController->{$this->currentMethod}($this->params);
                unset($url[1]);
                
               
            }
              
            }
           
            }
            
            $this->params =$url ? array_values($url):[];
            
            call_user_func_array([$this->currentController,$this->currentMethod],$this->params);
            
            // else{
            //     echo "method dont exist";
            // }
        }
            
    }
    public function getUrl(){

        if(isset( $_GET['url'])){ 
           
            $url=rtrim($_GET['url'],'/');
            $url=filter_var($url,FILTER_SANITIZE_URL);
            $url=explode( '/',$url);
            return $url ;          
    }
}
}