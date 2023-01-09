<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <link rel="stylesheet" href="css/main.css" />
      <meta charset="utf-8">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
         <div class="container">
         <div class="container">
           <a href="/artalk/index.php" class="navbar-brand">ARTALK</a>
           <ul class="nav navbar=nav">
                 <li class="nav-item">
                 <a class="nav-link" href="ajouterproduit.php">AJOUT</a>
                 </li>
                 <li class="nav-item">
                 <a class="nav-link" href="modifierproduit.php">MODFICATION</a>
                 </li>
                 <li class="nav-item">
                 <a class="nav-link" href="supprimerproduit.php">SUPPRESSION</a>
                 </li>
                 <li class="nav-item">
                 </ul>    
         </div>
      </nav>
      <tr> 
	<td valign="top"> <br><br><br>
		<center><h2> Supprimer un Produit : </h2></center><br>
		<form method="post" >
			<table style='margin:auto'>
				<tr><td>Reference produit : </td> <td><input type="text" name="id" value=""></td> </tr>
				<tr><td><input type="submit" name="supprimerP" value="Suppression produit" > </td> </tr>
			
			</table>
		</form> 
        <tr><br><br>
		<center><h2> Supprimer un Membre : </h2></center><br>
		<form method="post" >
			<table style='margin:auto'>
				<tr><td>Email client : </td> <td><input type="text" name="email" value=""></td> </tr>
				<tr><td><input type="submit" name="supprimerM" value="Suppression membre" > </td> </tr>
			
			</table>
		</form>
        <?php
			if(isset($_POST["supprimerP"]))
			{
				$id=$_POST["id"];
							
				$connect=mysqli_connect('localhost','root','','artalk') 
                or die("Erreur de connexion avec la BD!");
				
				
				$requete=mysqli_query($connect,"delete from produits where id='$id'");
												
				$nbre=mysqli_affected_rows($connect);
				if($nbre >0)
				{
					echo"Félicitations, vous avez supprimé un produit!!!";
				}
				else
				{
					echo "Aucun produit n'a été supprimé";
				}
			}
            if(isset($_POST["supprimerM"]))
			{
				$email=$_POST["email"];
							
				$connect=mysqli_connect('localhost','root','','artalk') 
                or die("Erreur de connexion avec la BD!");
				
				
				$requete=mysqli_query($connect,"delete from membre where email='$email'");
												
				$nbre=mysqli_affected_rows($connect);
				if($nbre >0)
				{
					echo"Félicitations, vous avez supprimé un membre!!!";
				}
				else
				{
					echo "Aucun membre n'a été supprimé";
				}
			}
		?>
