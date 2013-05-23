<?php

class Product {
    protected $name;
    protected $price;
    protected $created;

    function __construct($name, $price, $created) {
        $this->name = $name;
        $this->price = $price;
        $this->created = $created;
    }

    public function getCreated() {
        return $this->created;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }
}