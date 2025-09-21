<?php
/*
maxtemperature.php
Author: Nay Oo Kyaw
Date: 2025-09-20

Description:
1. get temperature data array as parameter
2. return the maximum temperature from the array based on the calculation as below
Explanation : 
TemperatureChange = 1 -2 1
Output:
• 1
Explanation:
• The temperature after the above readings is as follows: 0 + 1 = 1, 1 - 2 = -1, -1 + 1 = 0. So, the maximum temperature reached during the day is 1.
*/

    echo "Max Temperature Calculation \n";

    // $inputArray = [1, -2, 1];
    $inputArray = [-1, -2, -3];
    echo "Size of Array : " . count($inputArray) . "\n";
    $temp = 0;
    $maxTemp = 0; // PHP_INT_MIN
    for ($i = 0; $i < count($inputArray); $i++) {
        echo $inputArray[$i] . "\n";
        $temp += $inputArray[$i];
        if ($temp > $maxTemp) {
            $maxTemp = $temp;
        }
    }
    echo "Max Temperature : " . $maxTemp . "\n";