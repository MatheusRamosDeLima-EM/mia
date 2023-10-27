<?php
    class Product {
        private string $name;
        private float $price;
        private string $image;
        private string $slogan;
        private string $information;

        public function __construct(string $name, float $price, string $image, string $slogan, string $information) {
            // $this->attribute = $attribute;
            $this->__set('name', $name);
            $this->__set('price', $price);
            $this->__set('image', $image);
            $this->__set('slogan', $slogan);
            $this->__set('information', $information);
        }

        public function __get($attribute) {
            return $attribute? $this->$attribute : '';
        }
        
        public function __set($attribute, $value) {
            $this->$attribute = $value;
        }
    };
?>