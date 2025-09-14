<?php
    echo "Match Expression Example \n";
    $num = 2;

    $result = match($num) {
        1 => "ONE",
        2 => "TWO",
        3 => "THREE",
        default => "OTHER",
    };
    echo $result . "\n";

    echo match(5) {
        1 => "One",
        2 => "Two",
        default => "Other",
    }
?>