<?php
    echo "Return Types \n";

    echo sum(1, 2) . "\n";

    function sum (int $a, int $b) : int | string {
        return $a + $b;
    }
?>