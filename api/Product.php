<?php
    class Product {
        private string $name;
        private float $price;
        private string $img;
        private string $description;
        public function __construct(string $name, float $price, string $img, string $description) {
            $this->name = $name;
            $this->price = $price;
            $this->img = $img;
            $this->description = $description;
        }
        public function __get($attr)
        {
            return $attr? $this->$attr : '';
        }
    };