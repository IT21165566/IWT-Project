<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log-in</title>
    <link rel="stylesheet" href="../CSS/Style.css">
    <link rel="stylesheet" href="../CSS/Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../Js/Home.js" defer></script>
</head>
<body style="height: 40vh;">
    <!-- This is header section -->
    <header>
        <div class="front-row">
            <div class="logo-section"><a href="../HTML/Home.php"><img src="../images/Dream new.png" style="width:425px; height: 140px; margin-top: 5px;"></a></div>
            <div class="login-section">
                <div class="btn-packs">
                    <div class="log">
                        <span ><a style="color: black;text-align: center;
                            padding:8px 0 0 0;font-family: 'Koulen', cursive; font-size: 25px; font-weight: 30px;" href="../HTML/Login.php">log-in</a></span>
                    </div>
                    <div class="log">
                        <span><a a style="color: black;text-align: center;
                            padding:8px 0 0 0;font-family: 'Koulen', cursive; font-size: 25px; font-weight: 30px;" href="../HTML/Register.php">register</a></span>
                    </div>
                    <div class="avatar">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-section">
            <ul class="nav">
            <li><a href="../HTML/Home.php">Home</a></li>
                <li><a href="../HTML/TypesOfWeddings.php">Types Of Wedding</a></li>
                <li><a href="../HTML/hotel.php">Hotel</a></li>
                <li><a href="../HTML/aboutus.php">About us</a></li>
                <li class="bookNow"> <a href="../HTML/reservation.php">Make Reservations</a> </li>

            </ul>
        </div>
    </header>
   <br><br><br><br><br><br><br><br><br><br><br>
   <!-- <body style=" height: 80vh;
   margin-top: 0%;"> -->
<section>
    <div class="ImgBx"> 
        <img src="../images/llll.jpg">
    </div> 
   
    <div class="contentBx"> 
        <div class="formBx">
            <h2>Login</h2>
            <br><br><br><br><br>

        <form action="customerLogin.php" method="POST">

            <div class="inputBx">
                <span>User Name</span>
                <input name = "user" type="text" name="">
            </div>
            <div class="inputBx">
                <span>Password</span>
                <input name = "psd" type="password" name="">
             </div>
            <!-- <div class="remember" >
                <div>
                    <input type="checkbox" name="">
                </div class = "checkbox">
                <label>Remember me</label>
                
            </div> -->
            <div class="inputBx" >
                <button name = "loginC" type="submit" value="submit" class="Btn1" > Log In as Customer</a></button>
            </div>

            <div class="inputBx" >
                <button name = "loginH" type="submit" value="submit" class="Btn1" >Log In as Hotel</a></button>
            </div>
            <!-- <div class="inputBx">
               <center> <p>Forgotten password?</p></center>
        </div> -->
        </form>

        <div class="inputBx" >
                <button type="submit" value="submit" class="Btn2" ><a href="Customer._Register.php"> Create An Account </a></button>
            </div>
            <!-- <div class="inputBx">
                    <p>Don't have an account? Register</p>
            </div> -->


    <h3>Login with social media</h3>
    <br><br><br>
    <ul class="sci">
        <li><img src="../images/fb.png"></li>
        <li><img src="../images/insta n.jpg"></li>
        <li><img src="../images/Twitter.png"></li>
    </ul-->
    <!-- <li><a style="" href="https://www.facebook.com/"><img src="../images/fb.png"></a></li>
    <li><a href="https://www.instagram.com/accounts/login/"></a><img src="../images/insta n.jpg"></a></li>
    <li><a href="https://twitter.com/i/flow/login"></a><img src="../images/Twitter.png"></a></li>
</ul--> 
</div>
</div>
    
</section>
</body>

      <!-- footer changes should made in here -->
        
      <footer class="sticky-footer">
        <div class="txt-area">
            <p class="text-1"> <a style="color: rgb(7, 6, 6);
                font-size: 20px;
                font-weight: 800;
                margin: 0 -130px;
              
                position: relative;
            margin-left: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: row;
            height: 50px;
            width: 400px;letter-spacing: 3px;" href="../HTML/contactus.html">Contact US</a> </p>
            <p id="divider">|</p>
            <p class="text-1"><a style="color: rgb(7, 6, 6);
                font-size: 20px;
                font-weight: 800;
                margin: 0 10px;
               
                position: relative;
            margin-left: -130px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: row;
            height: 50px;
            width: 400px;letter-spacing: 3px;" href="../HTML/Feedback.html">Feedback</a></p>
        </div>
        <div class="social-icons">
            <div class="fb">
                <i class="fa-brands fa-facebook-square"></i>
            </div>
            <div class="twitter">
                <i class="fa-brands fa-twitter-square"></i>
            </div>
            <div class="insta">
                <i class="fa-brands fa-instagram-square"></i>
            </div>
            <div class="google">
                <i class="fa-brands fa-google-plus-square"></i>
            </div>
        </div>
    </footer>
</body>
</html>



<?php
require_once 'connection.php';
if(isset($_POST["registerBtn"])){

    $firstname=$_POST["fname"];
    $lastname=$_POST["lname"];
    $Dob=$_POST["dob"];
    $address=$_POST["add"];
    $mobile=$_POST["mnum"];
    $email=$_POST["email"];
    $username=$_POST["uname"];
    $password=$_POST["psd"];
    $gender=$_POST["gender"];

   $stmt = $con->prepare("insert into registercustomer (CFname,CLname,CDOB,CAddress,CMobile,CEmail,CUsername,CPassword,CGender)values(?,?,?,?,?,?,?,?,?)");
   $stmt->bind_param("sssssssss", $firstname,$lastname,$Dob,$address,$mobile,$email,$username,$password,$gender);
   $stmt->execute();
   echo "Registered Succesfully";



   $stmt->close();
   $con->close();

}
?>


<?php
require_once 'connection.php';
if(isset($_POST["logA"])){

    $Aname=$_POST["aname"];
    $Acontact=$_POST["acontact"];
    $Auser=$_POST["ausname"];
    $Apassword=$_POST["apswd"];
    

   $stmt = $con->prepare("insert into registerhotel (aname,acontact,ausname,apswd)values(?,?,?,?)");
   $stmt->bind_param("ssss", $Aname, $Acontact,$Auser,$Apassword);
   $stmt->execute();
   echo "Registered Succesfully";



   $stmt->close();
   $con->close();

}
?>