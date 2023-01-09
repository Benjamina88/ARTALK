<?php include "nav.php";?>

<?php
$connect=mysqli_connect('localhost','root','','artalk') or die("Erreur de connexion avec la BD!");
$query = mysqli_query($connect, "SELECT * FROM `produits`") or die(mysqli_error());

                    while($fetch = mysqli_fetch_array($query)){

                     if($fetch['categorie'] == "AA"){
                        ?>
                 <center><div >
                 
                   
                   <img src="<?php echo $fetch['photo']?>" width="250px" height="250px"/>
                   <p class="price">Nom produit: <?php echo $fetch['nomprod']?></p>
                   <p class="price">Prix: <?php echo $fetch['prix']?></p>
                   <a href="panier.php?produits_id=<?php echo $fetch['id']?>" class="btn btn-primary">Détails</a>
                </div>
 <br><hr>
                     </center>


                     
                     

       <?php
                    }}?>
      