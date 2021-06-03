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
    echo "<h1 style = 'color:red'>State wise Corona virus Status </h1>";
    $i=1;

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
    $getdata= json_decode($data, true);
    $statescount = count($getdata['statewise']);
    while($i < $statescount){
        if($getdata['statewise'][$i]['state'] != "State Unassigned"){
            echo "<tr>";
            echo "<td>".$getdata['statewise'][$i]['lastupdatedtime'] . "</td>"  ;
            echo "<td>".$getdata['statewise'][$i]['state'] . "</td>"  ;
            echo "<td>".$getdata['statewise'][$i]['confirmed'] . "</td>"  ;
            echo "<td>".$getdata['statewise'][$i]['active'] . "</td>"  ;
            echo "<td>".$getdata['statewise'][$i]['recovered'] . "</td>"  ;
            echo "<td>".$getdata['statewise'][$i]['deaths'] . "</td>" ; 
            echo "</tr>";
            $i++;
        }
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