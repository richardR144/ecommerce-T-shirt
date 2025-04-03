<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<header>

		<nav>
			<ul>
				<li>Créer une commande</li>
			</ul>
		</nav>

	</header>

	<main>

<!-- je regarde s'il y une clé order dans mon espace de stockage de session sur le serveur
 si oui, j'affiche les infos à l'intérieur
 
-->
	<?php if (array_key_exists("order", $_SESSION)) { ?>
		<p>Vous avez une commande en attente : <?php echo $_SESSION["order"]["quantity"]; ?> : <?php echo $_SESSION["order"]["product"]; ?></p>
	<?php } ?>



		<form method="POST" >

			<label for="quantity">Quantity
				<input type="number" name="quantity" />
			</label>

			<label for="product">
				<select name="product">
					<option value="teeshirt_mario">Teeshirt Mario</option>
					<option value="teeshirt_hello_kitty">Teeshirt Hello Kitty</option>
					<option value="teeshirt_gta">Teeshirt GTA</option>
				</select>
			</label>

			<button type="submit">Créer la commande</button>

		</form>

	</main>

</body>
</html>