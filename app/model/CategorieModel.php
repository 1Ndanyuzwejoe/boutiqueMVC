<?php
use boutique\app\library\Connection\Connection;

class CategorieModel  {
    private $dbb;

    public function __construct()
    {
        $this->dbb=new Connection();
    }
    
    public function getCategories(){
        # code...
        $this->dbb->query("SELECT * FROM categorie");
        return $this->dbb->resultSet();
    }
    public function getById($id)
    {
        # code...
        $this->dbb->query("SELECT * FROM categorie WHERE id_categorie=:id_categorie");
        $this->dbb->bind(":id_categorie", $id);
        return $this->dbb->single();
    }

    public function create($data)
    {
        # code...
        $this->dbb->query("INSERT INTO categorie (nom_categorie,type_categorie) VALUES (:nom_categorie,:type_categorie)");
        $this->dbb->bind(":nom_categorie", $data['nom_categorie']);
        $this->dbb->bind(":type_categorie", $data['type_categorie']);
        return $this->dbb->execute();  
    }

    public function edit($data)
    {
        # code...
        $this->dbb->query("UPDATE categorie set  nom_categorie = :nom_categorie,type_categorie = :type_categorie WHERE id_categorie = :id");
        $this->dbb->bind(":nom_categorie", $data['nom_categorie']);
        $this->dbb->bind(":type_categorie", $data['type_categorie']);
        $this->dbb->bind(":id", $data['id']);
        return $this->dbb->execute();  
    }

    public function delete($id)
    {
        $this->dbb->query("DELETE FROM categorie WHERE id_categorie = :id");
        $this->dbb->bind(":id", $id);
        return $this->dbb->execute();  
    }
}


