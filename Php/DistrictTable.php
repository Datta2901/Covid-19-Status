<style>
table{
    border-style:solid;
    border-width:2px;
    border-color:orange;
    margin-left: 20%;
}
#myTable tr.header, #myTable tr:hover {
  background-color: yellow;
}
</style>

<?php 
    $id = $_GET['Id'];
    $data = file_get_contents("https://api.covid19india.org/state_district_wise.json");
    $getData = json_decode($data,true);

    echo "<table border 1 id = 'myTable'>";
    echo "<tr>
        <th>District Name</th>
        <th>Confirmed Cases</th>
        <th>Active Cases</th>
        <th>Recovered Cases</th>
        <th>No.of Deaths</th>
    </tr>";
    foreach($getData[$id]['districtData'] as $key => $value){
        // echo "$key";
        // echo "<br>";
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$getData[$id]['districtData'][$key]['confirmed'] . "</td>"  ;
        echo "<td>".$getData[$id]['districtData'][$key]['active'] . "</td>"  ;
        echo "<td>".$getData[$id]['districtData'][$key]['recovered'] . "</td>"  ;
        echo "<td>".$getData[$id]['districtData'][$key]['deceased'] . "</td>" ; 
        echo "</tr>";
        
    }

?>
<h1><?php echo $id;?></h1>
