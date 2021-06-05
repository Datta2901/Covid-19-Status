<?php 
    $data = file_get_contents("https://api.covid19india.org/state_district_wise.json");
    $getData = json_decode($data,true);
    $length = count($getData);
    $i=1;
    // print_r($getData);
    foreach($getData as $key =>$value){
        if($key != "State Unassigned"){
    ?>
    <a href = "./DistrictTable.php?Id=<?php echo $key;?>"><?php echo $key?></a>
    <?php
        echo "<br>";
        $i +=1;
        }
    }
    // echo $i;
    // print_r($getData);
?>
