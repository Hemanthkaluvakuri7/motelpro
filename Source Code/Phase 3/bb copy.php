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
    <script type="text/javascript">
    document.getElementById("demo").innerHTML = 5 + 6;
      function abcd()
      {
        document.getElementById("demo").innerHTML = 5 + 6;
        var abc=document.getElementById('number1').value;
        if(abc>15)
        {
          print("the value of members should be only 15");
        }
        else{
          continue;
        }
      }
    </script>
     <script type="text/javascript" src="dist/demo.js"></script>



    </head>
    <body>


    <header class="tm-header">
        <img class="tm-logo" src="images/Majestic_Hotel_hd.png" alt="Majestic Hotel">
        <nav class="tm-nav">
       <div>
            <ul>
                <li class="tm-list"><a href="index.html">Home</a></li>
                <li class="tm-list"><a href="explore.html">Explore</a></li>
                <li class="tm-list"><a href="rooms.html">Rooms</a></li>
                <li class="tm-list"><a href="bb copy.php">Booking</a></li>
                <li class="tm-list"><a href="pay.php">My Orders</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            </div>
        </nav>
    </header>


    <section class="tm-main">
           <p>Booking</p>
    </section>



    <section class="tm-booking">
    <div class="tm-form1">
    <!--<input type="text" name="name" placeholder="Enter Name" maxlength="11">
    <input type="email" name="email" placeholder="E-mail" maxlength="29">-->
    <form method="post">
    <div>
    <label  for="rooms" id="inlinelable">Rooms</label>
    <select name="Rooms" id="rooms" onchange="payr()">
        <option value="300" name="Luxury Suite">Luxury Suite</option>
        <option value="200" name ="Delux Suite">Delux Suite</option>
        <option value="100">Premier Suite</option>
        <option value="75">Luxury Room</option>
        <option value="45">Delux Room</option>
        <option value="30">Premier Room</option>
    </select>






    <div class="tm-num1" id="handleCounter1">
    <label for="number1" >Number of Rooms</label><br/>
        <button type="button" class="counter-minus btn btn-primary" onclick="paym()">- </button>
        <input type="text" name="number1" id="number1" value="1">
         <button type="button" class="counter-plus btn btn-primary"  onclick="pay()">+  </button>
        </div>
    





    </div>
        
            <label >Arrival Date</label>
            <br>
            <input type="date" name="date1" id='d1' value="<?php echo date('Y-m-d'); ?>" onchange="payr()">
            <br>
            <br>
            <label >Departure Date</label>
            <br>
            <input type="date" name="date2" id='d2' value="<?php echo date('Y-m-d+1'); ?>" onchange="payr()"> 
            <br>
            <br>
            <label>Promo code: </label>
            <br>
            <input type='text' id='cou' name='cou'>
            <h3><label> Apply Coupon</label>
            <input type="checkbox" id="appc" name="appc" onclick="payr()" ></h3>
  
    </div>

<center>
    <br><br><br>
    <br>
<label>CART SUMMARY: </label>
<hr>
<br><br>
<p><label id="dm1" name="dm1">Cost for Room selected : Luxury Suite</label></p>
<p> <label id="dm2" name="dm2">Number of Rooms Selected: 1</label></p>
<p>  <label id="dm3" name="dm3">Total Cost : </label></p>
<br>
<br>

<input type='submit' name ='ts' class="button button1" value='Proceed' >
</form>
    </center>
    <script>
        function pay()
      {
        var date1 = new Date(document.getElementById("d1").value);
var date2 = new Date(document.getElementById("d2").value);
var diffDays = date2.getDate() - date1.getDate();  
          var sel = document.getElementById("rooms");
var text= "Cost for Room selected : "+ sel.options[sel.selectedIndex].text;
        document.getElementById("dm1").innerHTML=text;
        document.getElementById("dm2").innerHTML="Number of Rooms Selected: "+String(parseInt(document.getElementById("number1").value)+1);
        $disc=0;
        if (document.getElementById('appc').checked && document.getElementById('cou').value=='save30')
        {
            $disc=30;
            alert("Hurray! Coupon Applied.")
        }
document.getElementById("dm3").innerHTML ="Total Cost : $"+ String((parseInt(document.getElementById("rooms").value)*(parseInt(document.getElementById("number1").value)+1)*diffDays)-$disc);
      }
      function paym()
      {
        var date1 = new Date(document.getElementById("d1").value);
var date2 = new Date(document.getElementById("d2").value);
var diffDays = date2.getDate() - date1.getDate(); 
        var sel = document.getElementById("rooms");
var text= "Cost for Room selected : "+ sel.options[sel.selectedIndex].text;
        document.getElementById("dm1").innerHTML=text;
        document.getElementById("dm2").innerHTML="Number of Rooms Selected: "+String(parseInt(document.getElementById("number1").value)-1);
        $disc=0;
        if (document.getElementById('appc').checked && document.getElementById('cou').value=='save30')
        {
            $disc=30;
            alert("Hurray! Coupon Applied.")
        }
        
document.getElementById("dm3").innerHTML ="Total Cost : $"+ String((parseInt(document.getElementById("rooms").value)*(parseInt(document.getElementById("number1").value)-1)*diffDays)-$disc);
      }
   


      function payr()
      {
        var date1 = new Date(document.getElementById("d1").value);
var date2 = new Date(document.getElementById("d2").value);
var diffDays = date2.getDate() - date1.getDate(); 
        var sel = document.getElementById("rooms");
var text= "Cost for Room selected : "+ sel.options[sel.selectedIndex].text;
        document.getElementById("dm1").innerHTML=text;
        document.getElementById("dm2").innerHTML="Number of Rooms Selected: "+String(parseInt(document.getElementById("number1").value));
        $disc=0;
        if (document.getElementById('appc').checked && document.getElementById('cou').value=='save30')
        {
            $disc=30;
            alert("Hurray! Coupon Applied.")
        }
document.getElementById("dm3").innerHTML ="Total Cost : $"+ String((parseInt(document.getElementById("rooms").value)*(parseInt(document.getElementById("number1").value))*diffDays)-$disc);
      }


</script>
<?php
if(isset($_POST["ts"]))
{
    if($_POST["ts"])
    {
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
            echo '<script>var sel = document.getElementById("rooms")</script>';
            $r=$_POST["Rooms"]; 
            $ro=$_POST["number1"];
            $depdate=$_POST["date2"];
            #$_SESSION["ro"]=$_GET["text"];
            $_SESSION['rom']='<script>parseInt(document.getElementById("number1").value);</script>'; 
            $roomb='<script>var price = document.getElementById("dm1").value;</script>';
            $roomn['rom']='<script>parseInt(document.getElementById("number1").value);</script>'; 
            $tot='<script>parseInt(document.getElementById("rooms").value)*(parseInt(document.getElementById("number1").value));</script>';

            $roomb="test";

            $SQLstring = "INSERT INTO $tableName VALUES( NULL, '".$id."','".$r."','".$ro."','".$depdate."')";

            $result[] = $mysqli->query($SQLstring);
            if ( $result )

            {
                $URL="http://localhost/payment.html";
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
                echo "Welcome $nam , Now you can login!";
                #header("Location: http://localhost/conf.php");
            }
            function checkuser()
            {
              alert('go');
              $tableName = "Orders";
              $id=$_SESSION["cid"];
              $SQLstring = "SELECT * FROM $tableName WHERE c_id='$id'";
              $result = $mysqli->query($SQLstring1);
              $numrows = mysqli_num_rows($result);
            if($numrows)
               {

                alert("Good");

               }


            
            } 





    }
}
?>
</body>
    </html>
