<?php require('../view/Partial/_header.php'); ?>

	<main>
	
		<h1>Payer une commande</h1>
        <!-- si l'utilisateur a une commande en cours, je l'affiche -->
        <!-- je vais donc changer le status de la commande de l'utilisateur en "PAID" -->
		<?php if ($orderByUser) {?>
			<p> <?php echo $orderByUser['product']; ?> :  <?php echo $orderByUser['quantity']; ?>
			<p>Créée le <?php echo $orderByUser['createdAt']->format('y-m-d'); ?></p>
			<p>Votre commande est en statut :<?php echo $orderByUser['status']; ?> </p>


			<form method="post">
				<button type="submit">Payer</button>
			</form>

		<?php } else { ?>
			<p>Vous n'avez pas de commande à payer</p>
		<?php } ?>
		

	</main>

</body>
</html>