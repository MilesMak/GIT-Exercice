<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Authentification - Doranco</title>
		<?php include("include/header.php")?>
	</head>
	<body>
		<h1>Authentification</h1>
			<form class="form-horizontal">
				<fieldset>
					<legend>Connexion</legend>
					<div class="form-group">
						<label class="col-md-4 control-label" for="login">Login</label>
						<div class="col-md-4">
							<input name="login" class="form-control input-md" id="login" required="" type="text" placeholder="Votre identifiant (e-mail)">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="password">Password</label>
						<div class="col-md-4">
							<input name="password" class="form-control input-md" id="password" required="" type="text" placeholder="Votre mot de passe">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="connect"></label>
						<div class="col-md-8">
							<button name="connect" class="btn btn-success" id="connect">Se connecter</button>
							<button name="abort" class="btn btn-danger" id="abort">Annuler</button>
						</div>
					</div>
				</fieldset>
			</form>
                <?php include("include/footer.php")?>
	</body>
</html>
