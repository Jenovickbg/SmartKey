
<?php
     
    require '../page/database.php';
    if ( !empty($_POST)) {
        $id = $_POST['id'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
        $sexe = $_POST['sexe'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
		$departement = $_POST['departement'];
		
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO utilisateurs(id,nom,prenom,sexe,email,mobile,departement) values(?, ?, ?, ?, ?,?,?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($id,$nom,$prenom,$sexe,$email,$mobile,$departement));
		Database::disconnect();
		header("Location:../page/users.php");
    }
?>
