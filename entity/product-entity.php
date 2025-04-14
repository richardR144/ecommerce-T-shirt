<?php

require_once('../config/config.php');
require_once('../model/product-repository.php');
require_once('../model/order-repository.php');  
require_once('../view/pay-order-view.php');
require_once('../model/order-entity.php');
require_once('../model/order-controller.php');
require_once('../view/create-order-view.php');
require_once('../view/Partial/_header.php');
require_once('../view/Partial/_footer.php');



class Product {
    // je crée une classe Product qui va représenter un produit
    // je lui passe en paramètre le nom, la description, le prix et la quantité du produit
    private $name;
    private $description;
    private $price;
    private $quantity;

    public function __construct($name, $description, $price, $quantity) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;
    }
    public function getName() {
        return $this->name;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getQuantity() {
        return $this->quantity;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function setDescription($description) {
        $this->description = $description;
    }
    public function setPrice($price) {
        $this->price = $price;
    }
    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }
    public function __toString() {
        return $this->name . ' ' . $this->description . ' ' . $this->price . ' ' . $this->quantity;
    }
    public function __toArray() {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'quantity' => $this->quantity
        ];
    }
}