<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<title>Hello</title>
	</head>
	<body>
		<div id="bloc_page">
			<header>
				<h1>Bienvenue sur ce site !</h1>
			</header>	
			<section>
				<p>
				<?php 
					if(isset($_POST['pseudo'])){
						echo 'Hello ' . htmlspecialchars($_POST['pseudo']); 
					}
					else{
						echo 'Hello world';
					}
				?>
				</p>				
			</section>
		</div>
	</body>
</html>