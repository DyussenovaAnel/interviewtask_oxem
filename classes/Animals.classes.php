<?php
abstract class Animals{
    protected $id;
    protected $product_count_today;
    protected $product_count_total;
    protected $animal_type;
    protected $animal_product_type;
    protected $min_product_quantity;
    protected $max_product_quantity;

    // protected function __construct($id, $product_count_today, $product_count_total, $animal_type, $animal_product_type){
    //     $this->id = $id;
    //     $this->product_count_today = $product_count_today;
    //     $this->product_count_total = $product_count_total;
    //     $this->animal_type = $animal_type;
    //     $this->animal_product_type = $animal_product_type;
    //     $this->min_product_quantity = $min_product_quantity;
    //     $this->max_product_quantity = $max_product_quantity;
    // }

    protected function __construct($id){
        $this->id = $id;
    }

    abstract function get_todays_product();

    public function getId(){
        return $this->id;
    }
    public function getType(){
        return $this->animal_type;
    }
    public function getProductType(){
        return $this->animal_product_type;
    }
}

?>