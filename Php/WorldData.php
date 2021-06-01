<style>

table{
    border-style:solid;
    border-width:2px;
    border-color:orange;
}
#myTable tr.header, #myTable tr:hover {
  background-color: yellow;
}
</style>
<?php

    echo "<input type = 'text' id='myInput' onkeyup='myFunction()' placeholder = 'Enter country to search' style = 'margin-left: 35%'>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "<table border = 1 id='myTable'>";
        echo "<tr>
            <th> Last Updated Date & Time</th>
            <th>Country </th>
            <th>New Confirmed Cases</th>
            <th>Total Confirmed cases</th>
            <th>Active Cases</th>
            <th>New Recovered cases</th>
            <th>Total Recovered </th>
            <th>New Deaths </th>
            <th>Total Deaths </th>
            <th>Country Code </th>
        </tr>";
        $data = file_get_contents('https://api.covid19api.com/summary'); // World
        $getData= json_decode($data, true);
        $length = count($getData['Countries']);
        $i=1;
        while($i < $length){
            $active = abs($getData['Countries'][$i]['TotalConfirmed'] - $getData['Countries'][$i]['TotalRecovered'] - $getData['Countries'][$i]['TotalDeaths']);
            echo "<tr>";
            echo "<td>".$getData['Countries'][$i]['Date']."</td>";
            echo "<td>".$getData['Countries'][$i]['Country'] ."</td>";
            echo "<td>".$getData['Countries'][$i]['NewConfirmed'] . "</td>";
            echo "<td>".$getData['Countries'][$i]['TotalConfirmed'] . "</td>";
            echo "<td>".$active. "</td>";
            echo "<td>".$getData['Countries'][$i]['NewRecovered'] ."</td>";
            echo "<td>".$getData['Countries'][$i]['TotalRecovered'] ."</td>";
            echo "<td>".$getData['Countries'][$i]['NewDeaths'] . "</td>"; 
            echo "<td>".$getData['Countries'][$i]['TotalDeaths'] . "</td>"; 
            echo "<td>".$getData['Countries'][$i]['CountryCode'] . "</td>"; 
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
   