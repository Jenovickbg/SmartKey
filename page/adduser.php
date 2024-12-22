<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link rel="shortcut icon" href="../images/logo2.png" type="image/x-icon">
	</head>
	<body>
		<div class="container">
			<br>
			<div class="center" style="margin: 0 auto; width:495px; border-style: solid; border-color: #f2f2f2;">
				<div class="row">
					<h3 align="center">Ajouter un utilisateur </h3>
				</div>
				<br>
				<form class="form-horizontal" action="../page/insert.php" method="post" >
					<div class="control-group">
						<label class="control-label">ID</label>
						<div class="controls">
							<textarea name="id" id="getUID" placeholder="Please Tag your Card / Key Chain to display ID" rows="1" cols="1" required></textarea>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Name</label>
						<div class="controls">
							<input id="div_refresh" name="nom" type="text"  placeholder="" required>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Prenom</label>
						<div class="controls">
							<input id="div_refresh" name="prenom" type="text"  placeholder="" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Sexe</label>
						<div class="controls">
							<select name="sexe">
								<option value="M">M</option>
								<option value="F">F</option>
							</select>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Email Address</label>
						<div class="controls">
							<input name="email" type="text" placeholder="" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Mobile </label>
						<div class="controls">
							<input name="mobile" type="text"  placeholder="" required>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Departement </label>
						<div class="controls">
							<input name="departement" type="text"  placeholder="" required>
						</div>
					</div>
					
					<div class="form-actions">
						<button type="submit" class="btn btn-success">sauvegarder</button>
						<a class="btn" href="users.php">Retour</a>
                   

				</form>
				
			</div>               
		</div> 
	</body>
</html>
