<?php
    echo "Order string asc \n";

    $inputStr = "abcde";
    $loopInputStr = $inputStr;
    $outputStr = "";
        
    $removeIndex = 0;

    for ($i = 0; $i < strlen($inputStr); $i++) {
        if (strlen($loopInputStr) > 0) {
            $firstLetter = $loopInputStr[0];
            for ($j = 0; $j < strlen($loopInputStr); $j++) {
                if ($loopInputStr[$j] < $firstLetter) {
                    $firstLetter = $loopInputStr[$j];
                    $removeIndex = $j;
                }
            }
            $loopInputStr = substr($loopInputStr, 0, $removeIndex). substr($loopInputStr, $removeIndex+1);
            // str_replace($firstLetter, "", $loopInputStr);
            $outputStr .= $firstLetter;
            echo "\ncutted : " . $loopInputStr;
            echo "\nget - " . $firstLetter;
        }
    }
    echo "\nordered : " . $outputStr;
?>