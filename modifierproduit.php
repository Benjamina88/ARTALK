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
	<td valign="top"> 
		
    <table  width="65%"  border="1px"><br><br><br>
		<Center><h2> Modifier un le prix produit : </h2></center><br>
		<form method="post" >
			<table style='margin:auto'>
				<tr><td>Reference produit * : </td> <td><input type="text" name="id" value=""></td> </tr>
				<tr><td>Nouveau prix : </td><td><input type="text" name="newprix" value="" > </td> </tr>
				<tr><td><input type="submit" name="update" value="Modifier le prix" > </td> </tr>
			
			</table>
			<br>
			<center>Attention! les cases avec * sont obligatoires</center>
		</form>
        <?php
			if(isset($_POST["update"]))
			{
				$id=$_POST["id"];
				$newprix=$_POST["newprix"];
				
                $connect=mysqli_connect('localhost','root','','artalk') 
                or die("Erreur de connexion avec la BD!");

				$requete=mysqli_query($connect,"select * from produits where id='$id'") 
				or die("Erreur de requete SQL!");
				
				$nbre=mysqli_num_rows($requete);
				
				if($nbre >0)
				{
					if (!empty($newprix))
					{
						$requete=mysqli_query($connect,"update produits 
												set prix='$newprix' 
												where id='$id'");
						echo"le prix de votre produit a été changé avec succès!!!"	;	
					
					}
                }
												
				else
				{
					echo"L'Id du produit est incorrect!";
				}
				
				
			}
		?>