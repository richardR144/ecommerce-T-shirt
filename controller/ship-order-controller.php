<?php 
require_once('../config/config.php'); 
require_once('../model/order-repository.php');


session_start();

$orderByUser = findOrderByUser();
// je regarde si c'est une méthode post si oui ça veut dire que l'utilisateur
// a cliqué sur "payer" dans le formulaire de paiement

$message = " ";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

   
    $orderByUser = findOrderByUser();
    // je change le status de la commande de l'utilisateur en status "shipped"
    $orderByUser['status'] = "Shipped";

    // je resauve la commande payée de l'utilisateur en session, elle remplace l'ancienne en CART
    saveOrder($orderByUser);
    $message = "Commande payée avec succès !";
} else {
    $message = "Aucune commande à payer";
}

require_once('../view/ship-order-view.php');