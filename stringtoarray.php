<?php
    echo "string to array\n";

    class StringToArray {
        private $inputString;
        public function __construct($inputString)
        {
            $this->inputString = $inputString;
        }

        public function getInputString() {
            return $this->inputString;
        }

        public function convertStringToArray() {
            $strArray = str_split($this->inputString);
            echo count($strArray) . "\n";
            echo gettype($strArray) . "\n";
        }
    }
    $stringToArray = new StringToArray("11112ss");
    $stringToArray->convertStringToArray();

    class StringToArrayExplode extends StringToArray {
        public function convertStringToArrayExplode() {
            $strArrayExplode = explode(",", $this->getInputString());
            echo count($strArrayExplode);
        }
    }
    $stringToArrayExplode = new StringToArrayExplode("d,4,3,2,t,5");
    $stringToArrayExplode->convertStringToArrayExplode();
?>