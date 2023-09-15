<?php

class Core{
    protected $currentController;
    protected $currentAction;
    protected $params;
    
    public function __construct(){
        $url = $this->getUrl();
        if(file_exists('../app/controllers/'.ucwords($url[0].'.php'))){

            $this->currentController = ucwords($url[0]);
            $this->currentAction     = $url[1];
            $this->params            = $url[2];

            unset($url[0]);
            unset($url[1]);
            unset($url[2]);

            include('../app/controllers/'.$this->currentController.'.php');
            
            $this->currentController = new $this->currentController;
            if (method_exists($this->currentController, $this->currentAction)){
                $this->currentController->{$this->currentAction}($this->params);
            }else{
                echo 'Action not found';
            }
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