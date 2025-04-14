<?php

//je créais une classe order qui contient les informations de la commande
// je lui passe en paramètre le produit, la quantité, date de création et le status
    class order {
        public $product;
        public $quantity;               
        public $createdAt;
        public $status;

    

//je créais un fonction constructeur qui va me permettre de créer une commande
// je lui passe en paramètre le produit et la quantité
        public function __construct($product, $quantity) {
            if ($quantity < 0) {
    // je lève une exception si la quantité est supérieur à 0 
         throw new Exception("Interdiction de mettre un produit inférieur à 0");
    // sinon, je renvoie un tableau contenant le produit, la quantité et la date de création de la commande
    //sinon si la quantité est supérieur à 3
        } else if ($quantity > 3) {
    // je lève une exception si la quantité est supérieur à 3
        throw new Exception("Interdiction de mettre un produit supérieur à 3");
        } else {
    //structure de commande qui regroupent les infos de produit, quantité et date de création
    //je crée un tableau associatif qui contient les informations de la commande
            $this->product = $product;
            $this->quantity = $quantity;
            $this->createdAt = new DateTime("now");
            $this->status = "CART";
    
        return $this;
        }
    }
}
// je crée une instance de la classe order
//si la class respectent la structure de commande qui regroupent les infos de produit, quantité et date de création
$order = new order("Teeshirt Mario", 1);
//je vérifie que le produit existe dans ma liste de produits
//je lui passe en paramètre le produit, la quantité, date de création et le status
$order->product = "Teeshirt Mario";
$order->quantity = 1;
$order->createdAt = new DateTime("now");
$order->status = "CART";

$order2 = new order("Teeshirt Mario 2", 2);
$order2->product = "Teeshirt Mario 2";
$order2->quantity = 2;
$order2->createdAt = new DateTime("now");
$order2->status = "CART";


