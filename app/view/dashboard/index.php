<div class="container px-4 px-lg-5 mt-5">
   <div class="row ">
     
   <?php foreach ($data['produits'] as $produit) { ?>
  

    <div class="col-md-4 mb-2">
         <div class="card h-100">
                            <!-- Product image-->
       <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
       <div class="card-body p-4">
           <div class="text-center">
              <h5 class="fw-bolder"><?= $produit->nom_categorie . " " . $produit->produit ?>
              </h5>
                      <?= $produit->prix ?>
           </div>
        </div>
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
             <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a>
             </div>
           </div>
   </div>   
                 <!-- Product details-->
    
       
         
      
   </div>
                        
                  

  <?php } ?>
   
     </div>
            </div>