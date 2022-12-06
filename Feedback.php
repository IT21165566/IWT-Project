<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About US</title>
    <link rel="stylesheet" href="../CSS/Style.css">
    <link rel="stylesheet" href="../CSS/Feedback.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../Js/Home.js" defer></script>
</head>

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
    <br><br> <br><br> <br><br>  

    <body style=" height: 10vh;
    margin-top: 0%;background-image: url('../images/about\ ba.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    margin-top: 0%;">
        <br><br><br><br><br><br>
        <center><h1 style="font-size: 100px; text-align :center; margin-right: -80px; text-decoration: underline;" class="Ttxtstyle">Feedback</h1></center>
        <br><br><br>
    <section >
   
            
            
    
            <h2 style="padding:30px 300px 0px 300px;">  
    
            <div class="fiex">
              
                <div id="formStyle1">
                   
                    <form style="padding:0px 200px 0px 120px; text-align: center; margin-left: 40px; margin-right: 90px;">
                        <br><br><br><br>
                    <fieldset style="padding:0px 100px 0px 100px;text-align: center; margin-right: -80px;">
                        <br><br><br><br>
                    <!-- <legend>FEEDBACK</legend> -->
                    
                        <label for="name">Name</label>
                        <input type="text" id="name" required>
    
                        <label for="Telephone">Telephone</label>
                        <input type="text" id="Telephone" required>
    
                        <label for="email">email</label>
                        <input type="email" id="email" required>		
    
                        <label for="Subject">Subject</label>
                        <input type="text" id="Subject" required>
    
                        <label for="Message">Message</label>
                        <textarea type="text" id="Message" required></textarea>
                        
                        <button class="Btn1" onclick="round()">Submit</button>
                    </fieldset>
                    <br><br><br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>	
    </section>
</h2>
    
    


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