<?php
use boutique\app\library\Controller\Controller;

class Categories extends Controller{
    private $modelCategorie;

    public function __construct(){
        $this->modelCategorie=$this->model("CategorieModel");
    }

    public function index()
    {
        $data = $this->modelCategorie->getCategories();
        $this->template("categories/index",["categories" => $data]);
        
    }    
    
    public function create()
    {
        // $data = $this->modelCategorie->create();
        $error = "";
        if(isset($_POST['submit']))
        {
            if(isset($_POST['nom_categorie']) && !empty($_POST['nom_categorie']))
            {
                if(isset($_POST['type_categorie']) && !empty($_POST['type_categorie']))
                {
                    $data = [
                        "nom_categorie" => $_POST['nom_categorie'],
                        "type_categorie" => $_POST['type_categorie'],
                    ];
                    $this->modelCategorie->create($data);
                    header("Location: " .URL_ROOT . "/categories");
                }
                else
                    $error = 'le type de la categorie est obligatoire';
            }
            else
                $error = 'la categorie est obligatoire';
        }
        $this->template("categories/create", ["error" => $error]);
    }

    public function edit($id)
    {
        $data = $this->modelCategorie->getById($id);
        $error = isset($data->id_categorie) ? "" : "La categorie non trouvee!!";

        if(isset($_POST['submit']) &&  isset($data->id_categorie))
        {
            if(isset($_POST['nom_categorie']) && !empty($_POST['nom_categorie']))
            {
                if(isset($_POST['type_categorie']) && !empty($_POST['type_categorie']))
                {
                    $data = [
                        "nom_categorie" => $_POST['nom_categorie'],
                        "type_categorie" => $_POST['type_categorie'],
                        "id" => $id,
                    ];
                    $this->modelCategorie->edit($data);
                    header("Location: " .URL_ROOT . "/categories");
                }
                else
                    $error = 'le type de la categorie est obligatoire';
            }
            else
                $error = 'la categorie est obligatoire';
        }
        $this->template("categories/edit", ["category" => $data, "error" => $error]);
    }
    
    public function delete($id)
    {
        $data = $this->modelCategorie->getById($id);
                
        if(isset($_POST['delete']) &&  isset($data->id_categorie))
            $this->modelCategorie->delete($id);

        header("Location: " .URL_ROOT . "/categories");
    }


    
    

}