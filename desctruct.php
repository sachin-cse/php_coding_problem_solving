<?php 
class Car{
    public $name  = 'Nissan Car';

    public function __construct($name){
        echo $this->name = $name;
    }

    public function __destruct(){
        echo "Desctruct is called";
    }
}


$car = new Car('BWW');
?>