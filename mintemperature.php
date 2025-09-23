<?php
    echo "min temperature calculation";

    $inputArray = [2,3,4,56,-1,-2, -22];

    $tempMin = PHP_INT_MAX;
    $responseMin = 0;
    for ($i = 0; $i < count($inputArray); $i++) {
        echo $inputArray[$i] . "\n";
        if ($inputArray[$i] < $tempMin) {
            $tempMin = $inputArray[$i];
            echo "new min found: " . $tempMin . "\n";
        }
        $responseMin = $tempMin;
    }
    echo "min temperature is: " . $responseMin;
?>