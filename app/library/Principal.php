<?php
namespace boutique\app\library\Principal;
class Principal{
    private $controller = "Dashboard";
    private $methode = "index";
 

    private $parametre=[];

    public function __construct()
    {
        # code...
        $url=$this->getUrl();

        if(file_exists(CONTROLLER . $url[0] . '.php'))
          {
              $this->controller=$url[0];
              unset($url[0]);
          }
        require_once CONTROLLER .$this->controller . '.php';

        $this->controller=new $this->controller;

            if(isset($url[1])){
                if(method_exists($this->controller,$url[1])){
                    $this->methode=$url[1];
                    unset($url[1]);
                }
            }

    if($this->parametre=$url){
     array_values($url);
   }
    else
        $this->parametre= $url ? array_values($url) : [''];
       call_user_func_array([$this->controller,$this->methode],$this->parametre);

 }


    public function getUrl()
    {
        if(isset($_GET['url'])){
            $url=rtrim($_GET['url'],'/');
            $url=filter_var($url,FILTER_SANITIZE_URL);
            $url=explode('/',$url);
            return $url;
        }
        else 
        return [''];

    }
}
