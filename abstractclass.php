<?php
    echo "abstract class\n";

    abstract class Car {
        public $name;

        public function __construct($name) {
            $this->name = $name;
        }

        abstract public function intro(): string;

        public function carInfo(): string {
            return "Car is a " . $this->name . ". " . $this->intro();
        }
    }

    class Audi extends Car {
        public function intro() : string {
            return "This car is made by Audi.";
        }
    }

    $audi = new Audi("Audi A8");
    echo $audi->intro();
    echo "\n";

    echo $audi->carInfo();
?>