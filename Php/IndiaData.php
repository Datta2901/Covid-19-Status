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
    // set_time_limit(6000000000);
    echo "<h1 style = 'color:red' align = center>State wise Corona virus Status </h1>";
    echo "<input type = 'text' id='myInput' onkeyup='myFunction()' placeholder = 'Enter State to search' style = 'margin-left: 45%'>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "<table border 1 id = 'myTable'>";
    echo "<tr>
        <th>Last Updated Date & Time</th>
        <th>State</th>
        <th>Confirmed Cases</th>
        <th>Active Cases</th>
        <th>Recovered Cases</th>
        <th>No.of Deaths</th>
    </tr>";
    $data = file_get_contents('https://api.covid19india.org/data.json');// INDIA
    // print_r($data);
    $getResult= json_decode($data, true);
    $length = count($getResult['statewise']);
    // echo $length;
    $i=1;
    while($i < $length){
      echo "<tr>";
      echo "<td>".$getResult['statewise'][$i]['lastupdatedtime'] . "</td>"  ;
      echo "<td>".$getResult['statewise'][$i]['state'] . "</td>"  ;
      echo "<td>".$getResult['statewise'][$i]['confirmed'] . "</td>"  ;
      echo "<td>".$getResult['statewise'][$i]['active'] . "</td>"  ;
      echo "<td>".$getResult['statewise'][$i]['recovered'] . "</td>"  ;
      echo "<td>".$getResult['statewise'][$i]['deaths'] . "</td>" ; 
      echo "</tr>";
      $i++;
    }
    echo "</table>";
?>

<script>
    function myFunction() {

        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
            }
        }
    }
</script>
