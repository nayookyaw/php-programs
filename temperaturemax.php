<?php

    echo "Max Temperature Calculation \n";
    $inputArray = [-1,-2,-3];
    $temp = 0;

    $resultMaxTemp = getMaxTemperature($inputArray);
    echo "Max Temperature : " . $resultMaxTemp . "\n";

    function getMaxTemperature($inputArray) {
        global $temp;
        $maxTemp = PHP_INT_MIN; // PHP_INT_MIN
        for ($i = 0; $i < count($inputArray); $i++) {
            echo $inputArray[$i] . "\n";
            $temp += $inputArray[$i];
            if ($temp > $maxTemp) {
                $maxTemp = $temp;
            }
        }
        return $maxTemp;
    }

?>