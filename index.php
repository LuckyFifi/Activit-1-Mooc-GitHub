<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<title>Accueil</title>
	</head>
	<body>
		<div id="bloc_page">
			<header>
				<h1>Bienvenue sur ce site !</h1>
			</header>	
			<section>
				<p>Hello world</p>
				<form method="post" action="traitement.php">
					<p>
						<label for="pseudo">Entrez votre pseudo : </label>
						<input type="text" name="pseudo" id="pseudo" placeholder="Ex : world" required /><br />
					</p>
					<p>
						<input type="submit" value="Envoyez" />
					</p>
				</form>				
			</section>
		</div>
	</body>
</html>