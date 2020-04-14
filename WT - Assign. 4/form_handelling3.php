<?php
    $data = array("Japan"=>"Tokyo","Mexico"=>"Mexico City","USA"=>"New York City","India"=>"Mumbai","Korea"=>"Seoul","China"=>"Shanghai","Nigeria"=>"Lagos","Argentina"=>"Buenos Aires","Egypt"=>"Cairo","England"=>"London");

    $c1 = $_POST['city'];

    foreach($data as $k => $v)
    {
        if($c1 == $v)
        {
            echo $v." is City of ".$k;
        }
    }
?>