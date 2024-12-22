<?php
    require 'database.php';
    $id = 0;
     
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
    if ( !empty($_POST)) {
        $id = $_POST['id'];
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM  utilisateurs  WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        Database::disconnect();
        header("Location: users.php");
         
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../images/logo2.png" type="image/x-icon">
    <title>supprimer</title>
</head>
 
<body>
	

    <div class="container">
     
		<div class="span10 offset1">
			

			<form class="form-horizontal" action="user data delete page.php" method="post">
				<input type="hidden" name="id" value="<?php echo $id;?>"/>
				<p class="alert alert-error">Voulez vous vraiment supprimer l'utilisateurs ?</p>
				<div class="form-actions">
					<button type="submit" class="btn btn-danger">Oui</button>
					<a class="btn" href="users.php">Non</a>
				</div>
			</form>
		</div>
                 
    </div> <!-- /container -->
  </body>
</html>
