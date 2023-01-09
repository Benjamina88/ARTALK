<html>

    <head>

        <link href="css/reset.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <title>Messagerie</title>
    <nav class="navbar navbar-default navbar-fixed-top" id="navbar">
         
           <a href="/artalk/index.php" class="container">ARTTALK</a>
             
        
    </nav>  
<div id="container">
	<div class="header">
		<h1>Ma Messagerie</h1>
	</div>
    
	<div class="main">
		<?php
            session_start();
                if(!isset($_SESSION['username'])){
        ?>
	<form name="form2" method="post" action="login.php">
		<?php 
            if(isset($_GET['message'])){ 
                $message=$_GET['message'];
                echo "<h3>$message</h3>";
            }
        ?>
    <h3>
    <table>
    <tr>
        <td><input type="text" name="username" placeholder="Identifiant"></td>
        <td><input type="password" name="password" placeholder="Mot de passe"></td>
        <td><input type="submit" name="submit" value="Se loguer"></td>
    </tr>
    </table>
    </h3>
 
	</form>
    <h2>Pour nous contacter veuillez vous inscrire ici...</h2>
    <h4>
    	<form method="post" action="register.php">
        <input type="text" name="username" placeholder="Identifiant" style="width:250px;"></br>
        <input type="password" name="password" placeholder="Mot de passe" style="width:250px";></br>
        <input type="password" name="confirm" placeholder="Confirmer Mot de passe" style="width:250px";></br>
        <input type="submit" name="submit" value="Soumettre">
        </form>
    </h4>
    <?php 
            if(isset($_GET['message1'])){ 
                $message=$_GET['message1'];
                echo "<h5>$message</h5>";
            }
    ?>
	<?php
        exit;
        }
    
    ?>

	<?php 
                if(isset($_GET['username'])){
                $_GET['username'];
                }
    ?>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script>

function submitchat(){
		if(form1.msg.value == ''){ 
			alert('Enter your message !');
			return;
		}
		var msg = form1.msg.value;
		var xmlhttp = new XMLHttpRequest(); 
		
		xmlhttp.onreadystatechange = function(){ 
			if(xmlhttp.readyState==4&&xmlhttp.status==200){
				document.getElementById('chatlogs').innerHTML = xmlhttp.responseText; 
			}
		}
		xmlhttp.open('GET', 'insert.php?msg='+msg, true);
		xmlhttp.send();
	}
	$(document).ready(function(e) {
			$.ajaxSetup({cache:false});
			setInterval(function() {$('#chatlogs').load('logs.php');}, 2000);
		});
		
	</script>
</head>
<body>
<h3><a href="logout.php">Déconnexion</a></h3>
<h2>Hello, <?php echo $_SESSION['username']; ?></h2>
	<div id="chatlogs">
    	Chargement de messages, Attendez SVP...
    </div>
<form name="form1">
	</br> <textarea name="msg" placeholder="Ecrivez ici..." style="width:590px; height:30px;"></textarea>
	<a href="#" onClick="submitchat()" class="button">Envoyer</a></br></br>
</form>
    </div>
</div>
</body>
</html>