<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <link rel="stylesheet" href="css/main2.css" />
      <meta charset="utf-8">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>


<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
         <div class="container">
           <a href="/artalk/index.php" class="navbar-brand">ARTALK</a>
           <ul class="nav navbar=nav">
                
                 <li class="nav-item">
                 <a href="voir_panier.php" class="btn navbar-btn btn-primary right">
                  <i class="fa fa-shopping-cart"></i>
                   <?php 

                  $conn = mysqli_connect("localhost","root","","artalk");
                  $ajouter=1;
                  $get_produit="SELECT * FROM panier WHERE ajouter='$ajouter'";
                  $produits=mysqli_query($conn,$get_produit) or die("Requete produits invalide");
                  $count_produits=mysqli_num_rows($produits);
                   ?> 
                   <span><?php echo $count_produits;?>Produits dans votre panier</span></a>
                   </li>
           </ul>      
         </div>
      </nav> 

      <?php
 $conn = mysqli_connect("localhost","root","","artalk");
@$produit_id=$_GET['produits_id'];
 
 $getproduit="SELECT * FROM produits WHERE id='{$produit_id}'";
 $produit=mysqli_query($conn,$getproduit);
 if(mysqli_num_rows($produit) <=0){
echo "<p style='color:red;text-align:center;margin: 10px 0;'>data not found.</p>";
}else{
while($row=mysqli_fetch_assoc($produit)){
   $produit_id=$row['id'];
   $produit_nomprod=$row['nomprod'];
   $produit_prix=$row['prix'];
}
?>
 <div>
    <table border="1px" align="center" width="700px" style="margin-top: 200px;">
      <form action="" method="post" name="add_to_cart">
      <tr>
        
        <td align="center" bgcolor="white" style="color:black;">
          <b>Nom produit</b>
        </td>
        <td align="center" bgcolor="white" style="color:black;">
          <b>Prix</b>
        </td>

       

      </tr>
       <tr>
         <td  align="center">
           <?php echo $produit_nomprod;?>

         </td>
       

       
         <td  align="center">
           <?php echo "$".""."$produit_prix";?>
         </td>
         </tr>
       
      <?php }?>
 </form>

     </table>
<center> 
 <a href="ajouter_au_panier.php?panier_id=<?php echo $produit_id;?>" class="btn btn-primary" style="margin-top: 10px;" name="add_cart" >Ajouter au panier</a>
 <a href="femmes.php?product-cenceled-successfully" name="add_to_cart_btn" class="btn btn-primary" style="margin-top: 10px;">Quitter</a>
 </center>

     </body>
     </html>