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
	if ($quantity < 0) {
		// je renvoie une exception si la quantité est supérieur à 0 
		throw new Exception("La quantité doit être supérieur à 0");
		// sinon, je renvoie un tableau contenant le produit, la quantité et la date de création de la commande
		//sinon si la quantité est supérieur à 3
	} else if ($quantity > 3) {
		// je renvoie une exception si la quantité est supérieur à 3
		throw new Exception("La quantité doit être inférieur à 3");
	} else {
		//structure de commande qui regroupent les infos de produit, quantité et date de création
		//je crée un tableau associatif qui contient les informations de la commande
		$order = [
			"product" => $product,
			"quantity" => $quantity,
			"createdAt" => new DateTime("Y-m-d H:i:s")  //structure de commande
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