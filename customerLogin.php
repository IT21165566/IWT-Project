<?php
 require 'connection.php';

if(isset($_POST["loginC"])){

    $username=$_POST["user"];
    $password=$_POST["psd"];
    
    $sql= "SELECT CUsername,CPassword FROM registercustomer ";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            if($_POST["user"]==$row['CUsername'] && $_POST["psd"]==$row['CPassword'])
                {
                //Valid user, so set the Session

                $_SESSION["userName"] = $_POST["user"];
                $_SESSION["password"] = $_POST["psd"];

                  include("Home.php");
                  
                }
                else{
                    header("Location:Login.php?");   
                }
                
        }
    }
}
?>

<?php
 require 'connection.php';

if(isset($_POST["loginH"])){

    $username=$_POST["huser"];
    $password=$_POST["hpsd"];
    
    $sql= "SELECT HUsername,HPassword FROM registerhotel ";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            if($_POST["huser"]==$row['HUsername'] && $_POST["hpsd"]==$row['HPassword'])
                {
                //Valid user, so set the Session

                $_SESSION["userName"] = $_POST["huser"];
                $_SESSION["password"] = $_POST["hpsd"];

                  include("Home.php");
                  
                }
                else{
                    header("Location:Login.php?");   
                }
                
        }
    }
}
?>


<?php
 require 'connection.php';

if(isset($_POST["logina"])){

    $username=$_POST["auser"];
    $password=$_POST["apsd"];
    
    $sql= "SELECT Ausername,Apasssword FROM adminlogin ";
    $result = $con->query($sql);
    
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
        
            if($_POST["auser"]==$row['Ausername'] && $_POST["apsd"]==$row['Apasssword'])
            {

                    
                //Valid user, so set the Session

                $_SESSION["Ausername"] = $_POST['auser'];
                $_SESSION["Apasssword"] = $_POST['apsd'];

                  include("adminDashboard.php");
                  
                }
                else{
                    header("adminDashboard.php?");   
                }
                
        }
    }
}
?>