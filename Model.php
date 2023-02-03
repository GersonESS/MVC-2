<?php

    class Model
    {
        public $name;
        public $product;

        public function __construct()
       
        {
            $this->name = "Gersom eUSTAQUIO";
            $this->product = "hghghghghg";
        }

        public function get_Name()
        {
            return $this->name;
        }

        public function get_Product()
        {
            return $this->product;
        }

    }
?>
