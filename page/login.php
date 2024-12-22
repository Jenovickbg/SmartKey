<?php 
 session_start() ;
 if(isset($_POST['valide'])){ 
   
   if(isset($_POST['pseudo']) && isset($_POST['mdp'])) { 
     $pseudo = $_POST['pseudo'] ;
     $mdp=$_POST['mdp'];
     $erreur = "" ;
    $nom_serveur = "localhost";
      $utilisateur = "root";
      $mot_de_passe ="";
      $nom_base_données ="nodemcu_rfidrc522_mysql" ;
      $con = mysqli_connect($nom_serveur , $utilisateur ,$mot_de_passe , $nom_base_données);
      
       $req = mysqli_query($con , "SELECT * FROM adm WHERE pseudo = '$pseudo' AND mdps ='$mdp' ") ;
       $num_ligne = mysqli_num_rows($req) ;
       if($num_ligne > 0){
           header("Location:../index.php") ;    
           
           $_SESSION['pseudo'] = $pseudo ;
       }else {
           $erreur = "Adresse Mail ou Mots de passe incorrectes !";
       }
   }
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	
	<link rel="shortcut icon" href="images/logo2.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="../images/wave.png">
	<div class="container">
		<div class="img">
			<img src="../images/bg.svg">
		</div>
		<div class="login-content">
			<form action="../page/login.php" method="POST">
				<img src="../images/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="pseudo">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input"  name="mdp">
            	   </div>
            	</div>
                <?php 
                if(isset($erreur)){
           echo "<p class= 'Erreur'>".$erreur."</p>"  ;
       }
       ?>
            	<input type="submit" class="btn" value="Login"  name="valide">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../js/main.js"></script>
</body>
</html>
