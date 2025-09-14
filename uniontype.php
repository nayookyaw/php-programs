<?php
    echo "Union Type \n";

    printValue(100);
    printValue("Hello World");
    printValue(3.14); // Error

    function printValue (int | string $value) {
        echo "Value: $value \n";
    }
?>