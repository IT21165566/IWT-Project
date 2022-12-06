<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log-in</title>
    <link rel="stylesheet" href="../CSS/Style.css">
    <link rel="stylesheet" href="../CSS/Login.css">
   
</head>

<section>
    <div class="ImgBx"> 
        <img src="../images/logggg.jpg">
    </div> 
   
    <div class="contentBx"> 
        <div class="formBx">
            <h2>Admin Login</h2>
            <br><br><br><br><br>

        <form action="customerLogin.php" method="POST">

            <div class="inputBx">
                <span>User Name</span>
                <input name = "auser" type="text" >
            </div>
            <div class="inputBx">
                <span>Password</span>
                <input name = "apsd" type="password" >
             </div>
            <!-- <div class="remember" >
                <div>
                    <input type="checkbox" name="">
                </div class = "checkbox">
                <label>Remember me</label>
                
            </div> -->

            <br><br><br>
            <div class="inputBx" >
                <button name = "logina" type="submit" value="submit" class="Btn1" > Log In as Admin</button>
            </div>

            
            <!-- <div class="inputBx">
               <center> <p>Forgotten password?</p></center>
        </div> -->
        </form>

      
            <!-- <div class="inputBx">
                    <p>Don't have an account? Register</p>
            </div> -->


   
</div>
</div>

<?php
require_once 'connection.php';
if(isset($_POST["hrbt"])){

    $Hname=$_POST["hname"];
    $Hlocation=$_POST["hloc"];
    $Hcontact=$_POST["hcontact"];
    $Hemail=$_POST["hemail"];
    $Huser=$_POST["huser"];
    $Hpassword=$_POST["hpsd"];
    

   $stmt = $con->prepare("insert into registerhotel (Hname,HLocation,HContact,HEmail,HUsername,HPassword)values(?,?,?,?,?,?)");
   $stmt->bind_param("ssssss", $Hname,$Hlocation,$Hcontact,$Hemail,$Huser,$Hpassword);
   $stmt->execute();
   echo "Registered Succesfully";



   $stmt->close();
   $con->close();

}
?>



