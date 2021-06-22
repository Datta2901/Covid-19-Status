<html>
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
        .image{
           width:100%;
           height: 87%;
        }

        body{
            margin: 0px 0px 0px 0px;
        } 
        .line{
            width:25%
        }
       
    </style>


<body>
    
    <center>
        <!-- <h1>Home Page</h1> -->
        <div class = "navBar">
        <nav>
            <a href = "#">Home</a>
            <a href = "./WorldData.php">World Data</a>
            <a href = "./IndiaData.php">India Data</a>
            <a href = "./StateData.php">State Data</a>
            <a href = "#Measures">Measures</a>
            <a href = "#symptoms">Symptoms</a>
        </nav>
        </div>
    </center>
    <img src = "./../images/bg.jpeg" class = "image">
   

<div id = "symptoms">
    <h1>Symptoms</h1>
    <center>
    <img src = "./../images/Screenshot (205).png">
    <hr>
    <img src = "./../images/Screenshot (206).png">
    <hr>
    <img src = "./../images/Screenshot (207).png">
</center>

</div>
    <br>
    <br>
    <br>
<div id = "Measures">
    <h1>Measures</h1>
    <center>
        <img src = "./../images/Screenshot (208).png">
        <hr class = "line">
        <img src = "./../images/Screenshot (209).png">
        <hr class = "line">
        <img src = "./../images/Screenshot (210).png">
        <hr class = "line">
        <img src = "./../images/vaccine.jpg">
        <h1 style = "font:bold;color:red">'Only Way to fight against COVID-19 is to get Vaccinated!!!'</h1>
    </center>
</div>
</body>
</html>

<?php 

?>