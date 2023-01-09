<?php
$conn=mysqli_connect('localhost','root','','artalk');
if(isset($_GET['supprimer_id'])){
	$supprimer_id=$_GET['supprimer_id'];
	$supprimer_requete="DELETE FROM panier WHERE id='{$supprimer_id}'";
	$supprimer=mysqli_query($conn,$supprimer_requete);
	if($supprimer){
		echo "<script>alert('produit supprimer du panier')</script>";
		echo "<script>window.open('voir_panier.php','_self')</script>";
	}
}

?>