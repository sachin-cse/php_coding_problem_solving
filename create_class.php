<?php 
class Car{
    public $name='BMW';

    function getCarName(){
        return $this->name;
    }
}


$car = new Car();
echo $car->name;
?>