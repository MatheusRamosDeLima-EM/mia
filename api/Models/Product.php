<?php
    class Product {
        private string $name;
        private float $price;
        private string $image;
        private string $description;

        public function __construct(string $name, float $price, string $image, string $description) {
            // $this->attribute = $attribute;
            $this->__set('name', $name);
            $this->__set('price', $price);
            $this->__set('image', $image);
            $this->__set('description', $description);
        }

        public function __get($attribute) {
            return $attribute? $this->$attribute : '';
        }
        
        public function __set($attribute, $value) {
            $this->$attribute = $value;
        }
    };
?>