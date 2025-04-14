<?php

require_once('../model/order-controller.php');
require_once('../model/order-repository.php');
require_once('../view/pay-order-view.php');
require_once('../config/config.php');
require_once('../model/product-entity.php');
require_once('../view/Partial/_header.php');
require_once('../view/Partial/_footer.php');
     


class Order {
    // je crée une classe Order qui va représenter une commande
    // je lui passe en paramètre le produit, la quantité et la date de création de la commande
    private $product;
    private $quantity;
    private $createdAt;
    private $status;

    public function __construct($product, $quantity, $createdAt, $status) {
        $this->product = $product;
        $this->quantity = $quantity;
        $this->createdAt = new DateTime($createdAt);
        $this->status = $status;
    }

    public function getProduct() {
        return $this->product;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getStatus() {
        return $this->status;
    }
}


