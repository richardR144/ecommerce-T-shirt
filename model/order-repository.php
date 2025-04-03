<?php	


//SELECT * FROM order where user-id = 1
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
function findOrderForUser(){
	//si la clé order existe dans mon espace de stockage de session sur le serveur
	//je renvoie la valeur de cette clé
	if (array_key_exists("order", $_SESSION)) {
		return $_SESSION["order"];
	//sinon, je renvoie null
	} else {
		return null;
	}
}
 //je créais une fonction pour créer une commande
// je lui passe en paramètre le produit et la quantité
function createOrder($product, $quantity) {
// je vérifie que le produit existe dans ma liste de produits
	if ($quantity < 0 || $quantity > 3) {
		// je renvoie false si la quantité est inférieure à 0 ou supérieure à 3
		return false;
		// sinon, je renvoie un tableau contenant le produit, la quantité et la date de création de la commande
	} else {
		$order = [
			"product" => $product,
			"quantity" => $quantity,
			"createdAt" => new DateTime("Y-m-d H:i:s")
		];
	
		return $order;
	}
	
}


//INSERT INTO order VALUES ($order, [product]), ($order, [$quantity]);
// je l'enregistre dans la session
// je créais une fonction pour créer une commande
// je lui passe en paramètre le produit et la quantité
function saveOrder($order) {
	$_SESSION["order"] = $order;
}

function deleteOrder() {
	//je supprime la clé order de mon espace de stockage de session sur le serveur
	unset($_SESSION["order"]);
}