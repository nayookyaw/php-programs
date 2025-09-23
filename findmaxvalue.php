<?php
    echo "find max value calculation";

    class FindMaxValue {
        private $inputArray;
        private $maxValue;

        public function __construct($inputArray) {
            $this->inputArray = $inputArray;
        }

        public function calculateMax() {
            $this->maxValue = PHP_INT_MIN;
            foreach ($this->inputArray as $input) {
                echo $input . "\n";
                if ($input > $this->maxValue) {
                    $this->maxValue = $input;
                    echo "new max found : " . $this->maxValue . "\n";
                }
            }
            return $this->maxValue;
        }
    }

    $findMaxInstance = new FindMaxValue([-2, -4.5, -234, -3333, -40, 0]);
    echo "max value is : " . $findMaxInstance->calculateMax();
?>