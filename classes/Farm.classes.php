<?php

class Farm{
    private $id;
    private $animals_count;
    private $products_count;
    private $products_count_today;
    private $animals_list;

    public function __construct($id){
        $this->id = $id;
        $this->animals_count = [];
        $this->products_count = [];
        $this->products_count_today = [];
        $this->animals_list = [];
    }

    public function add_animal($animal){

        $this->animals_list[] = $animal;
        if(in_array($animal->getType(), array_keys($this->animals_count))){
            $this->animals_count[$animal->getType()] +=1;
        }else{
            $this->animals_count[$animal->getType()] = 1;
        }
    }

    public function del_animal($animal){
        unset($this->animals_list[array_search($animal, $this->animals_list)]);
    }

    public function get_all_today_products(){
        foreach($this->animals_list as $item) {
            $res = $item ->get_todays_product();
            if(in_array($item->getProductType(), array_keys($this->products_count_today))){
                $this->products_count_today[$item->getProductType()] +=$res;
            }else{
                $this->products_count_today[$item->getProductType()] = $res;
            }
        }
        $this->products_count[] = $this->products_count_today;
        $this->products_count_today = [];
    }

    public function getInfoLastWeek(){
        $text = "Last Week products: <br>\n";
        // print_r($this->products_count);
        $temp_product_count = [];
        for($i = count($this->products_count)-1; $i >= count($this->products_count)-7; $i--){
            foreach (array_keys($this->products_count[$i]) as $ele){
                if(in_array($ele, array_keys($temp_product_count))){
                    $temp_product_count[$ele] +=$this->products_count[$i][$ele];
                }else{
                    $temp_product_count[$ele] =$this->products_count[$i][$ele];
                }
            }
            
        }
        foreach (array_keys($temp_product_count) as $ele){
            $text .= $ele ." - ". $temp_product_count[$ele]."<br>\n";
        }
        return $text;
    }

    public function getInfoAnimals(){
        $text = "Animals: <br>\n";
        foreach (array_keys($this->animals_count) as $ele){
            $text .= $ele ." - ". $this->animals_count[$ele]."<br>\n";
        }
        return $text;
    }

    public function getAnimalCount($animal_type){
        return $this->animals_count[$animal_type];
    }
    
}

?>