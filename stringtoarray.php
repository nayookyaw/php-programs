<?php
    echo "string to array\n";

    class StringToArray {
        private $inputString;
        public function __construct($inputString)
        {
            $this->inputString = $inputString;
        }

        public function convertStringToArray() {
            $strArray = str_split($this->inputString);
            echo count($strArray) . "\n";
            echo gettype($strArray) . "\n";
        }
    }
    $stringToArray = new StringToArray("11112ss");
    $stringToArray->convertStringToArray();
?>