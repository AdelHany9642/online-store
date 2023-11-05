<?php

class Cart{
    private static $items = [];
    private static $totalPrice = 0;

    public static function addToCart(Product $product, $quantity= 1){
        self::$items[] = [
            'product' => $product ,
            'quantity' => $quantity
        ];
    }

    public static function removeFromCart(Product $product){
        foreach (self::$items as $key => $item) {
            if ($item['product'] === $product) {
                unset(self::$items[$key]);
                break;
            }
        }
    }

    public static function getTotalPrice() {
        foreach (self::$items as $item) {
                self::$totalPrice += (int) $item['product']->getPrice() * (int) $item['quantity'];
        }
        return self::$totalPrice;
    }

    public static function getItems() {
        return self::$items;
    }
}