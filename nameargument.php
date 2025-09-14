<?php
    echo "Name Argument \n";

    printValue(name: "First Name", value: "John");

    function printValue ($name, $value) {
        echo $name . " : " . $value . "\n";
    }
?>