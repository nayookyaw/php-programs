<?php
    echo "reverse string \n";

    class ReverseString {
        private $inputStr;
        private $outputStr;
        private $outputStrArray = [];

        public function __construct($inputStr)
        {
            $this->inputStr = $inputStr;
        }

        public function reverseString() {
            for ($i= strlen($this->inputStr) -1; $i >= 0; $i--) {
                $this->outputStr .= $this->inputStr[$i];
                array_push($this->outputStrArray, $this->inputStr[$i]);
            }
            echo ("input - " . $this->inputStr);
            echo ("\noutput - ". $this->outputStr);
            echo "\noutput reverse array : ";

            foreach($this->outputStrArray as $output) {
                echo $output;
            }
        }
    }

    $reverseString = new ReverseString("ry7433");
    $reverseString->reverseString();
?>