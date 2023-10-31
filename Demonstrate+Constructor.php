// script to Demonstrate Constructor.

<?php
class Person {
    public $name;
    
    public function __construct($name) {
        $this->name = $name;
        echo "Hello, $name!";
    }
}

$person = new Person("John");
?>
