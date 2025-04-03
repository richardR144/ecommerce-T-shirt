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

	<p><?php echo $message; ?></p>

		<?php if ($orderByUser) {?>
			<p>Vous avez une commande en attente : <?php echo $orderByUser['product']; ?> <?php echo $orderByUser['quantity']; ?>
			<!--j'utilise la méthode format de l'objet DateTime pour formater la date mais je peux ne rien mettre et dans ce cas, il prendra la date du jour-->
	    	<p>Créée le <?php echo $orderByUser['createdAt']->format('d-m-Y'); ?></p>
		<?php } ?>

		<form method="POST" >

			<label for="quantity">Quantity
				<input type="number" name="quantity" />
			</label>

			<label for="product">
				<select name="product">
					<?php foreach ($products as $product) { ?>
						<option value="<?php echo $product; ?>"><?php echo $product; ?></option>
					<?php } ?>
				</select>
			</label>

			<button type="submit">Créer la commande</button>

		</form>

	</main>

</body>
</html>