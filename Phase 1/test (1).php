<html>
<style>
    #London {background-color:#0E5A8C;}
    #mid {background-color:#f1e4d5;}
    center{font-size:18px;font-family:Arial}
    input{font-size:18px;font-family:Arial}
    body{background-repeat: no-repeat;background-size:cover;}
</style>
<body>
<?php
if(isset($_POST["signUP"]))
{
    if($_POST["signUP"])
    {
        $email = $_POST["email"];
        $phone = $_POST["pho"];
        $password = $_POST["psw"];
        $name = $_POST["user"];
        $zipcode = $_POST["zip"];
        function phone()
        {
            if(strlen(phone)<10)
            {
                echo "Value must contain 10 digits";
                $flag=1;
            }
            elseif (strlen(phone)>10) {
                echo "Value must contain 10 digits";
            }
            else{
            }
        }
        if(strlen($zipcode)!=5){
            echo "Please enter a 5 digit zipcode";
            $flag=1;
        }
        if ($flag==0)
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

            $tableName = "Customers";

            $SQLstring = "INSERT INTO $tableName VALUES( NULL, '".$name."','".$password."','".$email."','".$phone."','".$zipcode."')";

            $result = $mysqli->query($SQLstring);
            if ( $result )

            {
                echo "Welcome $name , Now you can login!";
            }
        }
    }
}


?>
<form action="index.html" method="post" >
    <div>
        <body background = "grey.png" >
<br>
<br>
<br>
<br>
<br>
        <center>
            <font color=#cc4151>  Username: <input type="text" placeholder="Enter Username" name="user" required>
                <br><br>
                Password: <input type="password" placeholder="Enter Password" name="psw" minlength="8" pattern="^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=\S+$).{8,}$" required>
                <br><br>
                Email ID: <input type="email" placeholder="Enter Email ID" name="email" required>
                <br><br>
                <!--Mobile No: <input type="tel" placeholder="Enter phone number" maxlength="10" minlength="10"  name="pho" required>-->
                Mobile No: <input type="tel" placeholder="Enter phone number" pattern="[0-9]*"  name="pho" required>
                <br><br>
                Zipcode : <input id="zip" placeholder="Enter Zipcode" name="zip" maxlength="5" pattern="[0-9]*" required>
                <br><br>
                <input type="radio" id="emp" name="emp" value="emp">
                <label for="emp">Employer</label><br><br>
                <input type="submit" name="signUP" value="SIGN UP">
                <h2><font color=#ffb6c1>Existing User?</font> <!--<a href="login_new.php"> Login </a></h2>-->
                <!--<h2><font color=#ffb6c1>Go back home</font> <a href="index.html"> Home </a></h2>-->

        </center>
    </div>
</form>

</div>
</body>
</html>

