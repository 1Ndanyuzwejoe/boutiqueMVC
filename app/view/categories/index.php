<div class="container px-4 px-lg-5 mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <div class="col mb-5">
          <h1> Liste de categories</h1>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom Categorie</th>
      <th scope="col">Type Categorie</th>
     <th></th>
    </tr>
  </thead>
    <tbody>
  
      <?php   $count =1;
          foreach ($data['categories'] as $categorie) { ?>
      <tr>
        <td><?= $count++?></td>
        <td><?= $categorie->nom_categorie ?></td>
        <td><?= $categorie->type_categorie ?></td>
        <td>
          <form action="<?= URL_ROOT ?>/categories/delete/<?= $categorie->id_categorie ?>" method="POST">
            <a href="<?= URL_ROOT ?>/categories/edit/ <?= $categorie->id_categorie ?>">Edit</a> 
            <button type="submit" name="delete">Delete</button>
          </form>
        </td>
      </tr>
 
  <?php 
  } 
  
  ?>

</tbody>
    </table>



     </div>
    </div>
 </div>