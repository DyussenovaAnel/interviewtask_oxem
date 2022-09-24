<?php
include_once('Animals.classes.php');

class Cow extends Animals{

    public function __construct($id){
        parent::__construct($id);
        $this->min_product_quantity = 8;
        $this->max_product_quantity = 12;
        $this->animal_type = 'cow';
        $this->animal_product_type = 'milk';
    }

    public function get_todays_product(){
        return rand($this->min_product_quantity, $this->max_product_quantity);
    }
}

?>