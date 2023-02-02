<?php
use boutique\app\library\Controller\Controller;

class Produit extends Controller{
    private $modelProduit, $modelCategie;

    public function __construct(){
        $this->modelProduit=$this->model("ProduitModel");
        $this->modelCategie=$this->model("CategorieModel");
    }

    public function index()
    {
        $data = $this->modelProduit->getProduits();
        $this->template("products/index",["produits"=>$data]);
    }    
    
    public function create()
    {
        $categies = $this->modelCategie->getCategories();
        $error="";
        if(isset($_POST['submit'])){
            if(isset($_POST['produit']) && !empty($_POST['produit']))
            {
                if(isset($_POST['categorie_id']) && !empty($_POST['categorie_id']))
                {
                    $data = [
                        "produit" => $_POST['produit'],
                        "categorie_id" => $_POST['categorie_id'],
                        "libelle" => $_POST['libelle'],
                        "quantite" => $_POST['quantite'],
                        "prix" => $_POST['prix'],
                    ];
                    $this->modelProduit->create($data);
                    header("Location: " .URL_ROOT . "/produit");
                }
                else
                    $error = 'le type de la categorie est obligatoire';
            }
            else
                $error = 'la produit obligatoire';
        }

        $this->template("products/create", ["categories" => $categies, 'error'=>$error]);
    }


    public function update($id)
    {
        $produit = $this->modelProduit->getById($id);
        $categies = $this->modelCategie->getCategories();
        $error= isset($produit->id) ? "" : "Le produit non trouvee!!";
        if(isset($_POST['submit']) && isset($produit->id)){
            if(isset($_POST['produit']) && !empty($_POST['produit']))
            {
                if(isset($_POST['categorie_id']) && !empty($_POST['categorie_id']))
                {
                    $data = [
                        "produit" => $_POST['produit'],
                        "categorie_id" => $_POST['categorie_id'],
                        "libelle" => $_POST['libelle'],
                        "quantite" => $_POST['quantite'],
                        "prix" => $_POST['prix'],
                        "id" => $id,
                    ];
                    $this->modelProduit->edit($data);
                    header("Location: " .URL_ROOT . "/produit");
                }
                else
                    $error = 'le type de la categorie est obligatoire';
            }
            else
                $error = 'la produit obligatoire';
        }

        $this->template("products/edit", ["categories" => $categies, "produit" => $produit, 'error'=>$error]);
    }

    public function delete($id)
    {
        $data = $this->modelProduit->getById($id);
                
        if(isset($_POST['delete']) &&  isset($data->id))
            $this->modelProduit->delete($id);

        header("Location: " .URL_ROOT . "/produit");
    }

}

