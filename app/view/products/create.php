<div class="container px-4 px-lg-5 mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <div class="col mb-5">
          <h1> Liste de categories</h1>


          <div class="text-danger"><?= $data['error'] ; ?></div>
<form method="POST" action="<?=URL_ROOT ?>/produit/create">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Produits</label>
    <input type="text" class="form-control" id="" aria-describedby="" name="produit">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Libelle</label>
    <input type="text" class="form-control" id="" aria-describedby="" name="libelle">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Categorie</label>
    <select name="categorie_id" class="form-control">
        <option value="">....</option>
      <?php foreach ($data['categories'] as $category) { ?>
          <option value="<?= $category->id_categorie ?>"><?= $category->nom_categorie ?></option>
      <?php } ?>
  </div>
  
  <div class="mb-3 mt-3">
    <label for="exampleInputEmail1" class="form-label">Quantique</label>
    <input type="number" class="form-control" id="" aria-describedby="" name="quantite">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Prix</label>
    <input type="number" class="form-control" id="" aria-describedby="" name="prix">
  </div>
 
 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

</div>
</div>
</div>