
<?php
    require 'database.php';
 
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $departement = $_POST['departement'];
		$id = $_POST['id'];
		$sexe = $_POST['sexe'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
         
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE utilisateurs set nom = ?, prenom =?, sexe =?, email =?,  mobile =?, departement =? WHERE id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($nom,$prenom,$sexe,$email,$mobile,$departement,$id));
		Database::disconnect();
		header("Location:users.php");
    }
?>
