<div class="container px-4 px-lg-5 mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <div class="col mb-5">
          <h1> Liste de Produits</h1>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">produits</th>
      <th scope="col">Categorie</th>
      <th scope="col">Libelle</th>
      <th scope="col">Quantite</th>
      <th scope="col">Prix</th>

     <th></th>
    </tr>
  </thead>
    <tbody>
  
      <?php   $count =1;
          foreach ($data['produits'] as $produit) { ?>
      <tr>
        <td><?= $count++?></td>
        <td><?= $produit->produit ?></td>
        <td><?= $produit->nom_categorie ?></td>
        <td><?= $produit->libelle ?></td>
        <td><?= $produit->quantite ?></td>
        <td><?= $produit->prix ?></td>
        <td>
          <form action="<?= URL_ROOT ?>/produit/delete/<?= $produit->id ?>" method="POST">
            <a href="<?= URL_ROOT ?>/produit/update/<?= $produit->id ?>">Edit</a> 
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