<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <link rel="stylesheet" href="css/prod.css" />
      <meta charset="utf-8">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
         <div class="container">
           <a href="/artalk/index.php" class="navbar-brand">ARTALK</a>
           <br><br>
           <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder">
<div class="search-area">
    <form name="search" method="post" action="nav.php">
        <div class="control-group">
            

           <center> <input class="search-field" placeholder="Search here..." name="produit" required="required" />
          
<button class="btn btn-success" name="btn" data-toggle="modal" >Chercher</button></center>

<?php
if(isset($_POST['btn'])){
      $str=$_POST['produit'];
      header('location:serach_result.php?search='.$str.'');

}
?>
</div></form>
</div></div>

            

        </div></li></div>
        <br><br>
           <ul class="nav navbar=nav">
                 <li class="nav-item">
                 <a class="nav-link" href="AA.php">ART ABSTRAIT</a>
                 </li>
                 <li class="nav-item">
                 <a class="nav-link" href="PO.php">PORTRAIT</a>
                 </li>
                 <li class="nav-item">
                 <a class="nav-link" href="NA.php">NATURE</a>
                 </li>
                 <li class="nav-item">
                 <a class="nav-link" href="NB.php">NOIR BLANC</a>
                 </li>
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
</body>
</html>      