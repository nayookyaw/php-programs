<?php
    echo "var dump functions in php\n";

    $a = 10;
    var_dump($a);

    $b = "hello world";
    var_dump($b);

    function add($x, $y) {
        return "$x + $y";
    }
    var_dump(add(5, 7));
?>