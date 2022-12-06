<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Registration</title>
    <link rel="stylesheet" href="../CSS/Style.css">
    <link rel="stylesheet" href="../CSS/Hotel_Register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../Js/Home.js" defer></script>
</head>

<body style=" height: 40vh;
background-image: url('../images//register\ hotels.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
margin-top: 0%;">
    <!-- This is header section -->
    <header>
        <div class="front-row">
            <div class="logo-section"><a href="../HTML/Home.php"><img src="../images/Dream new.png" style="width:425px; height: 140px; margin-top: 5px;"></a></div>
            <div class="login-section">
                <div class="btn-packs">
                    <div class="log">
                        <span ><a style="color: black;text-align: center;
                            padding:8px 0 0 0;font-family: 'Koulen', cursive; font-size: 25px; font-weight: 30px;" href="Login.php">log-in</a></span>
                    </div>
                    <div class="log">
                        <span><a a style="color: black;text-align: center;
                            padding:8px 0 0 0;font-family: 'Koulen', cursive; font-size: 25px; font-weight: 30px;" href="Register.php">register</a></span>
                    </div>
                    <div class="avatar">
                        <!-- <p>Not Signed In</p> -->
                        <i style="color: black;" class="fa-solid fa-user-tie"></i>
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
        <div>
        <br><br><br><br><br><br><br><br><br><br><br>
        <div class="container">
            <div class="heading">Registration For Hotels</div>
            <form action="Login.php" method="POST">
                <div class="card-details">
                    <div class="card-box">
                        <span class="details">Hotel Name</span>
                        <input name = "hname" type="text"placeholder="Enter hotel name">
                    </div>
                    <div class="card-box">
                        <span class="details">Location</span>
                        <input name = "hloc" type="text"placeholder="Enter location">
                </div>
                <div class="card-box">
                    <span class="details">Contact Number</span>
                    <input name = "hcontact" type="text"placeholder="Enter contact number">
                </div>
                <div class="card-box">
                    <span class="details">Email</span>
                    <input name = "hemail" type="text"placeholder="Enter email">
                </div>
                <div class="card-box">
                    <span class="details">Username</span>
                    <input name = "huser" type="text"placeholder="Enter your username">
                </div>
                <div class="card-box">
                    <span class="details">Password</span>
                    <input name = "hpsd" type="password"placeholder="Enter your password">
                </div>
                <div class="button">
                    <input name = "hrbt" type="submit" value="Submit">
            </div>
            <!-- <br> -->
            <div class="button">
                <input  type="submit" value="Reset">
            </div>
                </div> 
            </div> 
                </body>
                <!-- <br><br><br><br><br><br><br><br><br><br><br> -->
            </div>


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


</html>

