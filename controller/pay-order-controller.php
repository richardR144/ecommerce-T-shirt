<?php

session_start();

require_once('../model/order-repository.php');


$orderByUser = findOrderByUser();

// je regarde si c'est une méthode post si oui ça veut dire que l'utilisateur
// a cliqué sur "payer" dans le formulaire de paiement
// je vais donc changer le status de la commande de l'utilisateur en "PAID"
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	// je change le status de la commande de l'utilisateur en status "PAID"
	$orderByUser['status'] = "PAID";

	// je resauve la commande payée de l'utilisateur en session, elle remplace l'ancienne en CART
	saveOrder($orderByUser);
}





require_once('../view/pay-order-view.php');