<div class="container px-4 px-lg-5 mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <div class="col mb-5">
          <h1> editer categories</h1>


          <div class="text-danger"><?= $data['error'] ; ?></div>
<form method="POST" action="<?=URL_ROOT ?>/categories/edit/<?= $data['category']->id_categorie ?>">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom Categorie</label>
    <input type="text" class="form-control" value="<?= $data['category']->nom_categorie ?>" id="" aria-describedby="" name="nom_categorie">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Type category</label>
    <input type="text" class="form-control" id=""  value="<?= $data['category']->type_categorie ?>" aria-describedby="" name="type_categorie">
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">modifier</button>
</form>

</div>
</div>
</div>