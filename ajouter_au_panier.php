<?php 

$conn = mysqli_connect("localhost","root","","artalk");
$produit_id=$_GET['panier_id'];
$ajouter=1;

$insertion_panier="INSERT INTO panier (produit_id, ajouter) VALUES ('{$produit_id}','{$ajouter}')";
    $run=mysqli_query($conn,$insertion_panier);
    if($run){
	header("Location:voir_panier.php");
	}else{
		echo "Error";
	}

?>