<?php
use boutique\app\library\Connection\Connection;

class ProduitModel  {
    private $dbb;

    public function __construct()
    {
        $this->dbb=new Connection();
    }
    
    public function getProduits(){
        # code...
        $this->dbb->query("SELECT * FROM produit inner join categorie on categorie.id_categorie=produit.categorie_id");
        return $this->dbb->resultSet();
    }
    public function getById($id)
    {
        # code...
        $this->dbb->query("SELECT * FROM produit WHERE id=:id");
        $this->dbb->bind(":id", $id);
        return $this->dbb->single();
    }

    public function create($data)
    {
        # code...
        $this->dbb->query("INSERT INTO produit (produit,categorie_id,Libelle,quantite,prix) VALUES (:produit,:categorie_id,:Libelle,:quantite,:prix)");
        $this->dbb->bind(":produit", $data['produit']);
        $this->dbb->bind(":categorie_id", $data['categorie_id']);
        $this->dbb->bind(":Libelle", $data['libelle']);
        $this->dbb->bind(":quantite", $data['quantite']);
        $this->dbb->bind(":prix", $data['prix']);

        return $this->dbb->execute();  
    }

    public function edit($data)
    {
        # code...
        $this->dbb->query("UPDATE produit set  produit = :produit, categorie_id = :categorie_id,Libelle=:Libelle, quantite=:quantite, prix=:prix WHERE id= :id");
        $this->dbb->bind(":produit", $data['produit']);
        $this->dbb->bind(":categorie_id", $data['categorie_id']);
        $this->dbb->bind(":Libelle", $data['libelle']);
        $this->dbb->bind(":quantite", $data['quantite']);
        $this->dbb->bind(":prix", $data['prix']);
        $this->dbb->bind(":id", $data['id']);
        return $this->dbb->execute();  
    }

    public function delete($id)
    {
        $this->dbb->query("DELETE FROM produit WHERE id = :id");
        $this->dbb->bind(":id", $id);
        return $this->dbb->execute();  
    }
}


