<?php
    echo "This is trait \n";
    trait MyTrait1 {
        public function trait1Function() {
            return "This is trait 1 function \n";
        }
    }

    trait MyTrait2 {
        public function trait2Function() {
            return "This is trait 2 function \n";
        }
    }

    trait MyTrait3 {
        public function trait3Function() {
            return "This is trait 3 function \n";
        }
    }

    class MyTraitClass {
        use MyTrait1, MyTrait2;
    }

    $myTraitClass = new MyTraitClass();
    echo $myTraitClass->trait2Function();
    echo $myTraitClass->trait1Function();
?>