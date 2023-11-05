<?php

class Category{
    private $name;
    private $products = [];
    private $variants = [];

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function addProduct(Product $product){
        $this->products = $product ;
    }

    public function addVariant(Variant $variant){
        $this->variant[] = $variant;
    }
}