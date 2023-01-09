<?php
include "nav.php";
?>

<table align="center" width="500px" border="1px" style="color:black">
		<h1 align="center">DETAILS DU PANIER</h1>
	<tr>
  <td bgcolor="white" style="color:black" align="center">
			Id
		</td>

		<td bgcolor="white" style="color:black" align="center">
		Prix produit
		</td>

		<td bgcolor="white" style="color:black" align="center">
			Supprimer le produit de panier
		</td>
    </tr>

<?php 
$conn=mysqli_connect('localhost','root','','artalk');
  @$produit_id=$_GET['produits_id'];
  $x=1;
  
  $get_produit="SELECT * FROM panier WHERE ajouter=1";
        $produit=mysqli_query($conn,$get_produit);
		while($row=mysqli_fetch_assoc($produit)){
			$supprimer_id=$row['id'];
  			$produit_id=$row['produit_id'];

  			$get_prix="SELECT * FROM produits WHERE id='{$produit_id}'";
  			$prix=mysqli_query($conn,$get_prix);
  			while($row1=mysqli_fetch_assoc($prix)){

  			$produit_prix=$row1['prix'];

?>
<tr>
		<td  align="center">
        <?php echo $produit_id;?>
		</td>
		<td  align="center">
			<?php echo $produit_prix;?>
		</td>
        <td  align="center">
			<a href="supprimer_produit.php?supprimer_id=<?php echo $supprimer_id?>" class="btn btn-primary">Supprimer du panier</a>
		</td>
	</tr>
	<?php }}?>
		<div class="col-md-6 offer">
            <?php 
            $conn=mysqli_connect('localhost','root','','artalk');
            $ajouter=1;
            $total=0;
            $get_panier_id="SELECT * FROM panier WHERE ajouter='{$ajouter}'";
            $panier=mysqli_query($conn,$get_panier_id) or die("get_panier_id requete incomplete");
            while($get_id=mysqli_fetch_assoc($panier)){
              $prod_id=$get_id['produit_id'];
              $get_prod_id="SELECT * FROM produits WHERE id='{$prod_id}'";
              $prod=mysqli_query($conn,$get_prod_id) or die("get_prod_id requete incomplete");
              while($get_prix=mysqli_fetch_assoc($prod)){
                $produit_prix=array($get_prix['prix']);
                $values=array_sum($produit_prix);
                $total+=$values;
              }
              }
            ?>
<tr>
		<td colspan="6" align="center">
			<?php echo "<b>Total". " ". "$" .$total,"</b>";?>
		</td>
	</tr>
</table>            
<center>
<a href="client.php" class="btn btn-primary" style="margin-top: 10px;">Accueil</a>
<a href="total_paiment.php?total_prix=<?php echo $total?>" class="btn btn-primary" style="margin-top: 10px;">Payer</a>
</center>