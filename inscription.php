<!DOCTYPE html>
<html>
<head>
      <title>Inscription</title>
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
           <a href="/artalk/index.php" class="navbar-brand">ARTTALK</a>
           <ul class="nav navbar=nav">
                 <li class="nav-item">
                 <a class="nav-link" href="inscription.php">NOUVEAU MEMBRE</a>
                </li>
           </ul>      
         </div>
      </nav> 
      <br/><br/><br/>
      <center><h4>Nouveau Membre ARTALK</h4></center>
      <form method="post" id="formulaire">
            <div class="form-group">
                <tr><td>Email</td><td><input class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter email" type="email" name="email" value=""> </td></tr>	 
            </div> 
            <div class="form-group">   
			        	<tr><td>Password </td><td><input class="form-control" id="exampleInputPassword1" placeholder="Password" type="text" name="password" value=""> </td></tr>
                </div> 
            <div class="form-group">     
                <tr><td><input class="btn btn-primary" type="submit" name="inscrire" value="Inscrire"> </td></tr>
            </div> 
	    </form>
		  <!--DEBUT:::Section PHP-->
  <?php
  //1)recuperation des donnees transmises par POST
  if(isset($_POST["inscrire"]))
   {
      $email=$_POST["email"];
      $password=$_POST["password"];
//2)connexion avec la base de donnees "artalk"
$connect=mysqli_connect('localhost','root','','artalk') or die("Erreur de connexion avec la BD!");   
  //3)Requete SQL d'ajout de nouveau membre
      $insertion=mysqli_query($connect,"insert into membre values('$email','$password')") or die("Erreur de requete SQL!");
  //4)Analyse et affichage des resultats de la requete
      $nbre=mysqli_affected_rows($connect);
      if($nbre > 0)
      {
         echo "<script>alert(\"Ajout de $nbre client reussi!\")</script>";
         //header('Location: emailVerification.php');
      }
      else
      {
        echo "<script>alert(\"Aucun ajout de client!\")</script>";
      }
   }
  ?>
      </td>
</tr>	  
</table>

