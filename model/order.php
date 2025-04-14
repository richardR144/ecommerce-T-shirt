<?php

//je créais une classe order qui contient les informations de la commande
// je lui passe en paramètre le produit, la quantité, date de création et le status
class order {
    public $product;
    public $quantity;               
    public $createdAt;
    public $status;

}
// je crée une instance de la classe order
// je lui passe en paramètre le produit, la quantité, date de création et le status 
$order = new order();

$order->product = "Teeshirt Mario";
$order->quantity = 2;
$order->createdAt = new DateTime("now");
$order->status = "CART";

$order2 = new order();
$order2->product = "Teeshirt Mario 2";
$order2->quantity = 3;
$order2->createdAt = new DateTime("now");

