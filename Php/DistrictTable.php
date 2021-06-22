<style>
table{
    border-style:solid;
    border-width:2px;
    border-color:orange;
    margin-left: 30%;
}
#myTable tr.header, #myTable tr:hover {
  background-color: yellow;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        .navBar {
            background-color: black;
            height: 100px;
        }     
        .navBar a {
            color: white;
            text-decoration: none;
            text-align: center;
            font-size: large;
            padding: 10px;
            position: relative;
            top:30px;
        }   
        .navBar a:hover{
            background-color: red;
        }
        body{
            margin: 0px 0px 0px 0px;
        }  
    </style>
</head>

<body>
    
    <center>
        <!-- <h1>Home Page</h1> -->
        <div class = "navBar">
        <nav>
            <a href = "./Home.php">Home</a>
            <a href = "./WorldData.php">World Data</a>
            <a href = "./IndiaData.php">India Data</a>
            <a href = "./StateData.php">State Data</a>
        </nav>
        </div>
    </center>
    
</body>
</html>

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
<h1 align = center><?php echo $id;?></h1>

