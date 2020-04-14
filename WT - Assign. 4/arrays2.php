<?php
    
    $city = array("Tokyo","Mexico City","New York City","Mumbai","Seoul","Shanghai","Lagos","Buenos Aires","Cairo","London");
    echo "Given Array:- <br>";
    for($i = 0 ; $i < count($city) ; $i++)      #Displaying given array
    {
        if($i == count($city) - 1)
        {
            echo $city[$i].". <br><br>";
        }
        else
        {
            echo $city[$i].", ";
        }
    }

    #Array Sorting :-
    
    sort($city);                                
    echo "Array after First Sorting:- <br>";
    
    #Displaying given Array in Unordered List :-
    
    echo "<ul>";                     
    foreach($city as $c)
    {
        echo "<li>$c</li>";
    }
    echo "</ul>";

    #Adding Elements in the Array :-

    array_push($city,"Los Angeles","Calcutta","Osaka","Beijing");

    #Sorting the Array After Adding Elements:-

    sort($city);
    echo "Array after Second Sorting:- <br>";

    #Displaying given Array in Unordered List :-
    
    echo "<ul>";                     
    foreach($city as $c)
    {
        echo "<li>$c</li>";
    }
    echo "</ul>";

?>