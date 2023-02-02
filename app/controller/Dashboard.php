<?php
use boutique\app\library\Controller\Controller;

class Dashboard extends Controller{
    private $modelProduit, $modelCategie;

    public function __construct(){
        $this->modelProduit=$this->model("ProduitModel");
    }

    public function index()
    {
        $data = $this->modelProduit->getProduits();
        $this->template("dashboard/index", ["produits" => $data]);
    }
    

}