<?php

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


