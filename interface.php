<?php
    echo "interface \n";

    interface House {
        public function intro(): string;
        public function houseName(): string;
    }

    class MyHouse implements House {
        private $name;

        public function setHouseName ($nameValue) {
            $this->name = $nameValue;
        }

        public function intro(): string {
            return "This house is made by " . $this->name;
        }

        public function houseName(): string {
            return $this->name;
        }
    }

    $myHouse = new MyHouse();
    $myHouse->setHouseName("My House Babe");
    echo $myHouse->intro();
    echo "\n";
?>