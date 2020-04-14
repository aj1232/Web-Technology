<?php
    $months = array("January","February","March","April","May","June","July","August","September","October","November","December");
    $len = count($months);

    #Displaying given Array:

    for($i = 0 ; $i < $len ; $i++)
    {
        echo $months[$i]."<br>";
    }
    echo "<br><br>";

    #Removing Element of Index 1:

    unset($months[1]);

    #Modifying Indexes of Remaining Element:
    
    $months1 = array_values($months);

    $len1 = count($months1);

    #Displaying Remaining Array:
    
    echo "Remaining Array:-<br>";
    
    for($i = 0 ; $i < $len1 ; $i++)
    {
        echo $months1[$i]."<br>";
    }
?>