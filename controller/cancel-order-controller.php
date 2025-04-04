<?php

require_once('../config.php');
require_once('../model/order-repository.php');

session_start();

$orderByUser = findOrderByUser();

$message = "";
// je regarde si c'est une méthode post si oui ça veut dire que l'utilisateur
// a cliqué sur "payer" dans le formulaire de paiement
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// je vais donc changer le status de la commande de l'utilisateur en "CANCELED"
// je change le status de la commande de l'utilisateur en status "CANCELED"
	if ($orderByUser['status'] === 'CART') {
		$orderByUser['status'] = "CANCELED";
		saveOrder($orderByUser);
        //sinon je renvoie un message d'erreur $message = "la commande a bien été annulée";
	} else {
		$message = "la commande est déjà payée. Vous ne pouvez plus l'annuler";
	}

}


require_once('../view/cancel-order.php');