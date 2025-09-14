<?php
    echo "inheritance.php \n";

    class Animal {
        final public function sound() {
            echo "Animal sound \n";
        }
    }

    class Dog extends Animal {
        public function bark () {
            echo "Dog barks \n";
        }
    }

    class Cat extends Animal {
        public function weep () {
            echo "Cat meows \n";
        }
    }

    $dog = new Dog();
    $dog->sound(); // Outputs: Dog barks
    $dog->bark();  // Outputs: Animal sound

    $cat = new Cat();
    $cat->sound(); // Outputs: Cat meows
    $cat->weep();  // Outputs: Animal sound
?>