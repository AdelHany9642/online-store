<?php

class Product{
    private $name;
    private $imgUrl;
    private $price;
    private $categories = [];

    public function __construct($name,$imgUrl,$price){
        $this->name = $name ;
        $this->imgUrl = $imgUrl ;
        $this->price = $price ;
    }

    public function getName(){
        return $this->name;
    }

    public function setImgUrl($url){
        $this->imgUrl = $url;
    }

    public function getImgUrl(){
        return $this->imgUrl;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function getPrice(){
        return $this->price;
    }

    public function addToCategory(Category $category){
        $this->categories[] = $category;
        $category->addProduct($this);
        return $this ;
    }
}