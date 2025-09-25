<?php
    echo "Array to String \n";
    class ArrayToString {
        private $inputArray;
        private $outputStr = "";

        public function __construct($inputArray)
        {
            $this->inputArray = $inputArray;
        }

        public function getOutStr() {
            return $this->outputStr;
        }

        public function convertToString() {
            foreach($this->inputArray as $input) {
                // echo $input;
                $inputStr = (String) $input;
                $this->outputStr .= $inputStr;
            }
        }
    }

    $arrayToString = new ArrayToString([1,2,3,4,4]);
    $arrayToString->convertToString();
    echo $arrayToString->getOutStr();
?>