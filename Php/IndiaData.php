<?php

    $data = file_get_contents('https://api.covid19india.org/data.json');// INDIA
    // echo $data; 
    $getdata= json_decode($data, true);

    $statescount = count($getdata['statewise']);
    echo "<h1 style = 'color:red'>Total States are $statescount</h1>";
    $i=1;
    while($i < $statescount){
        echo $getdata['statewise'][$i]['lastupdatedtime'] . "\t"  ;
        echo $getdata['statewise'][$i]['state'] . "\t"  ;
        echo $getdata['statewise'][$i]['confirmed'] . "\t"  ;
        echo $getdata['statewise'][$i]['active'] . "\t"  ;
        echo $getdata['statewise'][$i]['recovered'] . "\t"  ;
        echo $getdata['statewise'][$i]['deaths'] . "<br>"  ; 
        $i++;
    }
?>