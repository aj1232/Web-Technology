<?php
    $a = 5;
    $fact = 1;

    for(; $a > 0 ; $a--)
    {
        $fact = $fact * $a;
    }

    echo "Factorial is :".$fact;
?>