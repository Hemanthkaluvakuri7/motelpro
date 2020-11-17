<html>
    <?php
session_start();
    ?>
    <head>
    <style>
        .button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}
    </style>
    <meta charset="utf-8">
    <title> Magestic Hotel</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="dist/pickmeup.min.js"></script>
    <script type="text/javascript" src="dist/handleCounter.js"></script>
    <link rel="stylesheet" type="text/css" href="css/pickmeup.css">
    <link rel="stylesheet" type="text/css" href="css/handle-counter.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script type="text/javascript" src="dist/jquery.scrollUp.js"></script>
    
    
     <script type="text/javascript" src="dist/demo.js"></script>



    </head>
    <body>

    <header class="tm-header">
        <img class="tm-logo" src="images/Majestic_Hotel_hd.png" alt="Majestic Hotel">
        
    </header>


    <center>
        <br><br>
           <h1>PREVIOUS ORDERS:</h2>
           <br>
    </center>



    

<label id='demo'></label>
<br>


<?php


      
        $user = 'root';
            $pass='';
            $db='motelpro';

            $mysqli= new mysqli('localhost',$user,$pass,$db) or die("LOOSER");

            if (mysqli_connect_error())
            {
                echo 'Error: Could not connect to database. Please try again later.';
                exit();
            }

            $mysqli->select_db("motelpro")
            or die("<p>Unable to select the database.</p>"
                . "<p>Error code " . mysqli_errno($mysqli)
                . ": " . mysqli_error($mysqli)) . "</p>";

            $tableName = "Orders";
            $id=$_SESSION["cid"];
            $nam=$_SESSION["nm"];
  
            $romp=$_SESSION["rom"];

            $tableName = "Orders";
            $tableName2 = "Customers";


            $SQLstring1 = "SELECT * FROM $tableName WHERE c_id = '$id' order by o_id";
            
            $result = $mysqli->query($SQLstring1);
            $numrows = mysqli_num_rows($result);
            echo "<h1>You have $numrows orders:</h1><br>";
            while ($row = $result->fetch_assoc()) {
              
              $_SESSION["oid"]=$row['o_id'];
              $od=$row['o_id'];
              $rm='';
              $nrm=$row['nor'];
              $de=$row['depd'];
              if($row['room']=='300')
              {
                $rm='Luxury Room';
              }


            
              echo "<h3>Your Order ID : $od </h3><br><h2> Room booked: $rm </h2><h2>No. of Rooms booked: $nrm </h2><br>";
             if($de > date("Y-m-d"))
             {
              echo "<form method='post'><input type='submit' name =cb value='Cancel Booking' s></form><br><hr>";
             }
             else{
               echo "<hr>";
             }
            }
          $numrows = mysqli_num_rows($result);
if($numrows)
{
  

}
else
{

echo 'Enter valid credentials';

}


     if(isset($_POST["cb"]))
{
  if($_POST["cb"])
  {   
   


    $SQLstring3 = "DELETE FROM $tableName WHERE o_id='$x'" ;
                                    
      $result = $mysqli->query($SQLstring3);
  
      header("Location: http://localhost/canconf.php");
     
    

    }
}


?>

<center>
    <form action='index.html'>
<input type='submit' name ='ts2' class="button button1" value='Go To Home'>
    </center>
</body>
    </html>
