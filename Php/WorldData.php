<?php

    $data = file_get_contents('https://api.covid19api.com/summary'); // World

    // echo $data; 
    $getData= json_decode($data, true);
    $length = count($getData['Countries']);
    echo "<h1 style = 'color:red'>Total Countries are $length</h1>";

    // $i=1;
    while($i < $length){
        echo $getData['Countries'][$i]['Date']."\t";
        echo $getData['Countries'][$i]['Country'] ."\t"  ;
        echo $getData['Countries'][$i]['NewConfirmed'] . "\t"  ;
        echo $getData['Countries'][$i]['TotalConfirmed'] . "\t"  ;
        echo $getData['Countries'][$i]['active'] . "\t"  ;
        echo $getData['Countries'][$i]['NewRecovered'] . "\t"  ;
        echo $getData['Countries'][$i]['TotalRecovered'] . "\t"  ;
        echo $getData['Countries'][$i]['NewDeaths'] . "\t"  ; 
        echo $getData['Countries'][$i]['TotalDeaths'] . "\t"  ; 
        echo $getData['Countries'][$i]['CountryCode'] . "<br>"; 
        $i++;
    }
?>