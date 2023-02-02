<?php
namespace boutique\app\library\Controller;
class Controller{
    private $page = "";
    
public function model($model)
{
    # code...
    if(file_exists(MODELS.$model.'.php')){
        require_once MODELS.$model.'.php';
        return new $model;
    }
}

    public function template($view,$data=[])
    {
        # code...
        ob_start();
        if(file_exists(VIEW.$view.'.php'))
            {
                require_once VIEW.$view.'.php';
            }else{
                echo "la page n'existe pas";
            }
        $contenu =ob_get_clean();
        
        require_once TEMPLATE .'/template.php';
    }
}