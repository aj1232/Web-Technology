<?php
    $name = $_POST['n1'];
    $col1 = $_POST['c1'];
    $col2 = $_POST['c2'];
    $col3 = $_POST['c3'];
    $col4 = $_POST['c4'];

    echo $name." likes <ul>" ;
    echo "<li>$col1</li>" ;
    echo "<li>$col2</li>" ;
    echo "<li>$col3</li>" ;
    echo "<li>$col4</li>" ;
    echo "</ul> <br>";
?>