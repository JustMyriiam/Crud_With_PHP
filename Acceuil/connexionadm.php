<!DOCTYPE html>
<html>
<head>
	<title>Inscription et Connexion</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<!-- jQuery et Bootstrap JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<!-- JS pour les formulaires -->
	<script>
		$(document).ready(function(){
			$("#form-connexion").hide(); // masquer le formulaire de connexion au chargement de la page
			$("#btn-inscription").click(function(){
				$("#form-connexion").hide();
				$("#form-inscription").show();
			});
			$("#btn-connexion").click(function(){
				$("#form-inscription").hide();
				$("#form-connexion").show();
			});
		});
	</script>
</head>
<body>
	<?php
	    include "../Includes/header.php"; 
	?>
	
	<div class="container">
		<h1>Inscription et Connexion</h1>

        <ul class="nav nav-tabs">
			<li class="active"><a href="#" id="btn-inscription">Inscription</a></li>
			<li><a href="#" id="btn-connexion">Connexion</a></li>
		</ul>

        <form id="form-inscription" method="post" action="connexionadm.php">
			<div class="form-group">
				<label for="nom">Nom :</label>
				<input type="text" class="form-control" id="nom" name="nom">
			</div>
			<div class="form-group">
				<label for="password">Mot de passe :</label>
				<input type="password" class="form-control" id="password" name="password">
			</div>
			<button type="submit" class="btn btn-primary">S'inscrire</button>
		</form>

        <form id="form-connexion" method="post" action="../Admin/espace.php">
			<div class="form-group">
				<label for="email">Email :</label>
				<input type="email" class="form-control" id="email" name="email">
			</div>
			<div class="form-group">
				<label for="password">Mot de passe :</label>
				<input type="password" class="form-control" id="password" name="password">
			</div>
            <button type="submit" class="btn btn-primary" name="conn_adm">Se connecter</button>
		</form>
	</div>
	<?php
	    include "../Includes/footer.php"; 
	?>
</body>
</html>
