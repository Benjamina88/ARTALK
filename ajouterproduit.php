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
                     
         </div>
      </nav> 

<tr> 
	<td valign="top"> 
            <br><br><br><br>
           
		<center><h2> Ajouter un Produit : </h2></center>


            <form method="POST" enctype="multipart/form-data" action="ajouterproduit.php">
			<table style='margin:auto'><br>
				<tr><td>Nom produit :</td><td><input type="text" name="nom" value="" > </td> </tr>
				<tr><td>Prix :</td><td><input type="number" name="prix" value="" > </td></tr>
                        <tr><td>Categorie :</td><td><input type="text" name="categorie" value="" > </td> </tr>
                        <tr><td>Photo :</td><td>
                    <input type="file" name="file" size="4" style="background-color:#fff;" required="required" />
                    <br /></td> </tr>
					<tr><td><input type="submit" name="ajouter" value="Ajouter produit" > </td> </tr>			
			</table>

		</form>
		
		<?php
			if(isset($_POST["ajouter"]))
			{

				$connect=mysqli_connect('localhost','root','','artalk') or die("Erreur de connexion avec la BD!");

				$nom=$_POST["nom"];
				$prix=$_POST["prix"];
				$categorie=$_POST["categorie"];


				$file_name = $_FILES['file']['name'];


                $file_temp = $_FILES['file']['tmp_name'];
                $location = "files/". $_FILES['file']['name'];

				
                if(move_uploaded_file($file_temp, $location)){
					mysqli_query($connect, "INSERT INTO `produits` VALUES('', '$nom', '$prix', '$location','$categorie')") or die(mysqli_error());
					echo"Félicitations, vous avez ajouté un nouveau produit!!!";
				}
				else
				{
					echo "Pas d'ajout de produit";
				}
			}
		?>
      
	</td>
</tr>

</table>


