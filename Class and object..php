// Demonstrate Class and object.

<?php
class Car {
    public $make;
    public $model;
    
    public function startEngine() {
        echo "Engine started!";
    }
}

$myCar = new Car();
$myCar->make = "Toyota";
$myCar->model = "Camry";
$myCar->startEngine();
?>
