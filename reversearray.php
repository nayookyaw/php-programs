<?php
    echo "reverse array \n";

    class ReverseArray {
        private $inputArr;
        private $outArr = [];

        public function __construct($inputArray)
        {
            $this->inputArr = $inputArray;
        }

        public function getOutArr() {
            return $this->outArr;
        }

        public function reverseArray() {
            for ($i = count($this->inputArr) - 1; $i >= 0; $i--) {
                array_push($this->outArr, $this->inputArr[$i]);
            }
            // print_r ($this->outArr);
            echo "finished \n";
        }
    }
    $reverseArr = new ReverseArray(["2", "22", "333", "5555"]);
    $reverseArr->reverseArray();
    print_r ($reverseArr->getOutArr());
?>