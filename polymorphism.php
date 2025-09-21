<?php
    echo "polymorphism \n";

    interface Shape {
        public function area(): float;
    }

    class Circle implements Shape {
        private $radius;

        public function area(): float {
            return 3.2;
        }
    }

    class Rectangle implements Shape {
        private $length;
        private $width;

        public function __construct($length = 2.0, $width = 3.0)
        {
            $this->length = $length;
            $this->width = $width;
        }

        public function area(): float {
            return 2.0 * $this->length * $this->width;
        }
    }

    $circle = new Circle();
    echo "Circle Area: " . $circle->area() . "\n";
    $rectangle = new Rectangle();
    echo "Rectangle Area: " . $rectangle->area() . "\n";

?>