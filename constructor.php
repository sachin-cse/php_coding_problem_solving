<?php
class Car{
    public $carName = 'Nissan Car';

    public function __construct($carName){
        $this->carName = $carName;
    }
 
}

$car = new Car('BMW');

echo $car->carName;
?>