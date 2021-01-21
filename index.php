<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <title>TSF Basic Banking System</title>
</head>
<body> 
    <div id="navhome">
    <nav id="navbar" class="navi" style="background-color: black; overflow: hidden; padding: 0px; margin: 0px;">
        <ul style="list-style-type: none;">
            <li style="margin-bottom: 10px; text-align: center; float: right; overflow: hidden; padding-right: 15px;">
            <a href="#view" style="color: white; text-decoration: none; font-size:20px">View Customers</a></li>
            <li style="margin-bottom: 10px; text-align: center; float: right; overflow: hidden; padding-right: 15px;">
            <a href="#home" style="color: white; text-decoration: none; font-size:20px">Home</a></li>
            
        </ul>
    </nav>
    
        <div id="intro"> 
            <h1 style="text-align: center; color: red; position:absolute; font-family: 'Roboto', sans-serif;">Welcome to TSF Basic Banking System!</h1>
            <footer style="margin-top:180px;color:white;position: absolute;bottom: 0px;right: 0px;">
            <center><h4>Copyright © Aastha Agarwal - 2021 GRIP INTERNSHIP PROJECT</h4></center>
        </div>
    </div>



    <div class="container-fluid" id="view">


    <p style="color: black; font-size:30px">All Customers: </p>
    
    <?php

$db = mysqli_connect("localhost", "root", "", "basicbank");
                    
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$query = mysqli_query($db, "SELECT * from customers");
    ?>

    <center>
    
    <form method="post" action=" ">
    <table border="1" id="customers">
    <tr>
     
      <th>Name</th>
      <th>Email</th>
      <th>Balance</th>
      <th> </th>
      
    </tr>
    <?php
        while($row =mysqli_fetch_array($query)){
          echo "<tr>";
          
          echo "<td>".$row['name']."</td>";
          echo "<td>".$row['email']."</td>";
          echo "<td>".$row['balance']."</td>";
          echo "<td style='text-align:center;'><button><a style='text-decoration:none; color:#000;' href='row_test.php?id=" . $row['id'] . "'>View</a></button></td>";
          
          echo "</tr>";
          
        }
        echo "</table>";
    ?>
    
    </form>
        <?php
          mysqli_close($db);
        ?>
  
  </center>
    
    </div>
    <style>
        body{
          background-color:black;
          background-size: 500px 900px;
        }

        h1{
        font-size: 60px;
        
        top: 40%;
        left: 50px;
        text-transform: uppercase;
	      background: linear-gradient(to right, #833ab4 0%, #fd1d1d 50%, #fcb045 100%);
	      -webkit-background-clip: text;
	      -webkit-text-fill-color: transparent;
        
        }

        .navi{
          border-style: solid;
          border-radius: 10px;
          border-color: white;
        }
        
        #intro{
        background-image: url("./img/piggy.jpg");
        height: 100vh;
        background-repeat: no-repeat;
        background-size: cover;
        padding:0px;
        margin: 0px;
        }
        .container-fluid{
            background-color: #ddd;
            font-size: 20px;
            text-align: center;
            padding-top:2rem;
            padding-left:10%;
            padding-right:10%;
            padding-bottom: 5rem;
        }
        #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        #customers td, #customers th {
        border: 1px solid black;
        padding: 8px;
        }

        #customers tr{background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: black;
        color: white;
        }

        #btn{
            background-color:  #950740;
            color: white;
            cursor: pointer;
        }


       
::-webkit-scrollbar {
  width: 10px;
}


::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px black; 
  border-radius: 10px;
}
 

::-webkit-scrollbar-thumb {
  background: lightgrey; 
  border-radius: 10px;
}


::-webkit-scrollbar-thumb:hover {
  background: lightgrey; 
}
    </style>

     
</body>
</html>