<?php

class Variant{
    private $name;
    private $details;

    public function __construct($name, $details) {
        $this->name = $name;
        $this->details = $details;
    }

    public function getDetails() {
        return $this->details;
    }

    public function getName() {
        return $this->name;
    }
}