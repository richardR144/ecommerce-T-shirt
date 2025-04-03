<?php

//je créais une fonction pour créer une commande
function findOrderByUser() {
    //je regarde s'il y une clé order dans mon espace de stockage de session sur le serveur
	if (array_key_exists("order", $_SESSION)) {
        // si oui, je renvoie la valeur de cette clé
		return $_SESSION["order"];
            // sinon, je renvoie null
	} else {
		return null;
	}
}
 //je créais une fonction pour créer une commande
// je lui passe en paramètre le produit et la quantité
function createOrder($product, $quantity) {
    // je crée un tableau associatif qui contient le produit et la quantité
	$order = [
		"product" => $product,
		"quantity" => $quantity
	];
    // je renvoie le tableau associatif
    // je l'enregistre dans la session
	return $order;
}

// je créais une fonction pour créer une commande
// je lui passe en paramètre le produit et la quantité
function saveOrder($order) {
	$_SESSION["order"] = $order;
}