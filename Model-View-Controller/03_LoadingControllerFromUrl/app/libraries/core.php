<?php

class Core{
    protected $currentController;
    protected $currentAction;
    protected $params;
    
    public function __construct(){
        $url = $this->getUrl();
        if(file_exists('../app/controllers/'.ucwords($url[0].'.php'))){
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
            include('../app/controllers/'.$this->currentController.'.php');
            $this->currentController = new $this->currentController;
        }
    }
    public function getUrl(){

      if($_GET['url']){
        $url = rtrim($_GET['url'],'/');
        $url = filter_var($url,FILTER_SANITIZE_URL);
        $url = explode("/",$url);
        return $url;
      }
    }
}

?>