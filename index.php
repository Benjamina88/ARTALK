<!DOCTYPE html>
<html>
<head>
      <title>ARTALK</title>
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
                 <a class="nav-link" href="./chatbox/index.php">MESSAGERIE</a>
                 </li>
                 <li class="nav-item">
                 <a class="nav-link" href="inscription.php">NOUVEAU MEMBRE</a>
                 </li>
                     
         </div>
      </nav> 
      <form id="formulaire1" method="post">
    <h4>Connexion admin</h4>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="email" id="email" name="emaila" class= "form-control" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" class="email" class= "form-control" id="password" placeholder="Password" name="passworda">
  </div>
  </div>
  <button type="submit" name="admin" class="btn btn-primary">CONNEXION ADMIN</button>
</form>

<form id="formulaire" method="post">
    <h4 >Connexion membre</h4>
  <div class="form-group">
    <label for="exampleInputEmail1">Email membre</label>
    <input type="email" class="email" id="email" name="email" class= "form-control" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" class="email" class= "form-control" id="password" placeholder="Password" name="password">
  </div>
  </div>
  <button type="submit" name="membre" class="btn btn-primary">CONNEXION MEMBRE</button>
</form>



<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" class="carousel" src="images/img4.jpeg" alt="First slide">
    </div>
    
    <div class="carousel-item">
      <img class="d-block w-100"  class="carousel" src="images/img18.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100"  class="carousel" src="images/img15.jpg" alt="Second slide">
    </div>

  
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php 
// 1) la session commence
@session_start();

//<script>
//function userAvailability() {
// $("#loaderIcon").show();
//  jQuery.ajax({
 // url: "check_availability.php",
 // data:'email='+$("#email").val(),
 // type: "POST",
 // success:function(data){
 // $("#user-availability-status1").html(data);
 // $("#loaderIcon").hide();
 // },
 // error:function (){}
 // });
  //}
  //</script>
  

//1)recuperation des donnees par $_POST du membre
if(isset($_POST["admin"]))
{
$emaila=$_POST["emaila"];
$passworda=$_POST["passworda"];	
//2)Connexion avec la base de donnees "artalk"
$connect=mysqli_connect('localhost','root','','artalk') 
or die("Erreur de connexion avec la BD!");
//3) Requete SQL avec PHP-mysql

$requete=mysqli_query($connect,"select * from admin where email='$emaila'
and password='$passworda'") or die("Erreur de requete SQL!");

//4) Analyse et affichage des resultats de la requete
$nbre=mysqli_num_rows($requete);
if($nbre >0)
	{
    //Redirection vers la page admin
    $_SESSION["email"] = $emaila;
    $_SESSION["password"] = $passworda;
		echo"<script> window.location.href='indexadmin.php';  </script>";
	}
	else
	{
		echo"Email et/ou password de l'admin incorrects!";
	}
}


//1)recuperation des donnees par $_POST du membre
if(isset($_POST["membre"]))
{
$email=$_POST["email"];
$password=$_POST["password"];	
//2)Connexion avec la base de donnees "artalk"
$connect=mysqli_connect('localhost','root','','artalk') 
or die("Erreur de connexion avec la BD!");
//3) Requete SQL avec PHP-mysql
$requete=mysqli_query($connect,"select * from membre where email='$email'
and password='$password'") or die("Erreur de requete SQL!");

//4) Analyse et affichage des resultats de la requete
$nbre=mysqli_num_rows($requete);
if($nbre >0)
	{
    //Redirection vers la page FEMMES
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password; 
		echo"<script> window.location.href='client.php';  </script>";
	}
	else
	{
		echo"Email et/ou password du membre incorrects!";
	}
}
?>
