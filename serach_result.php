
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
<?php include "nav.php";?>









<div class="search-result-container">
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane active " id="grid-container">
							<div class="category-product  inner-top-vs">
								<div class="row">									
			<?php 

            if(isset($_GET['search'])){
                $search=$_GET['search'];
                $connect=mysqli_connect('localhost','root','','artalk') or die("Erreur de connexion avec la BD!");
                $query = mysqli_query($connect, "SELECT * FROM `produits` where nomprod like '$search'") or die(mysqli_error());
                $result =mysqli_num_rows($query);
                if($result>0){
                    while($fetch = mysqli_fetch_array($query)){

                        ?>
                 <div>

                  <img src="<?php echo $fetch['photo']?>" width="250px" height="250px"/>
                  <p class="price">Prix: <?php echo $fetch['prix']?></p>
                  <a href="panier.php?produits_id=<?php echo $fetch['id']?>" class="btn btn-primary">Détails</a>
                </div>
 <br><hr>
<?php



            }

                              }  else{
                                echo'No results';
                              }            }
?>
                   
           