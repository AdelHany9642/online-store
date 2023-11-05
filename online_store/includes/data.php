<?php
include "includes/autoloader.inc.php";

$categories = [
    new Category("moblies"),
    new Category("laptops"),
];

$products = [
    (new Product ("Iphone 14 Pro Max","images/iphone 14 pro max.webp", "$50000"))->addToCategory($categories[0]),
    (new Product ("Laptop","images/laptop.jpg", "$35000"))->addToCategory($categories[1]),
];