<?php

require_once('../config.php');
require_once('../model/product-repository.php');
require_once('../model/order-repository.php');


session_start();

$message = " ";

if (array_key_exists("quantity", $_POST) && 
	array_key_exists("product", $_POST))
{
// je vérifie que la quantité est bien renseignée et que le produit est bien sélectionné
	try {
		$order = createOrder($_POST['product'], $_POST['quantity']);
		saveOrder($order);
// je renvoie un "message d'erreur";
	} 
	catch(Exception $e) {
		$message = $e->getMessage();
	} 
	
	

}

$orderByUser = findOrderByUser();
$orderForUser = findOrderForUser();


require_once('../view/create-order.view.php');

// le controleur : 

// récupère les données de requête (GET, POST etc etc)
// appelle le(s) répository pour récupérer les données (bdd, session)
// créé des variables / fonctions etc, pour simplifier l'utilisation des données dans la view
// renvoie une réponse contenant le HTML généré par la view