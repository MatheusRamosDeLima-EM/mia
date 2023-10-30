<?php
    class Product {
        private string $name;
        private string $slogan;
        private array $flavorsAndPrices;
        private string $image;
        private bool $isImageIllustrative;
        private string $information;

        public function __construct(string $name, string $slogan, array $flavorsAndPrices, string $image, bool $isImageIllustrative, string $information) {
            // $this->attribute = $attribute;
            $this->__set('name', $name);
            $this->__set('slogan', $slogan);
            $this->__set('flavorsAndPrices', $flavorsAndPrices);
            $this->__set('image', $image);
            $this->__set('isImageIllustrative', $isImageIllustrative);
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