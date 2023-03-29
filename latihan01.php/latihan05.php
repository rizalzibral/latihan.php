<?php
    //model 1
    $age = array ("peter"=>"35", "Ben"=>"37", "Joe"=>"47");

    //print_r($age);

    //echo "umur dari peter adalah".$age["peter"];
    foreach($age as $p => $u){

        echo $p . " umurnya " . $u;
    
        echo "<br>";
    }