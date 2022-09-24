<?php
include_once('Animals.classes.php');

class Chicken extends Animals{

    public function __construct($id){
        parent::__construct($id);
        $this->min_product_quantity = 0;
        $this->max_product_quantity = 1;
        $this->animal_type = 'chicken';
        $this->animal_product_type = 'eggs';
    }

    public function get_todays_product(){
        return rand($this->min_product_quantity, $this->max_product_quantity);
    }
}

?>