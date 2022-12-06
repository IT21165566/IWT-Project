<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
        <link rel="stylesheet"  href="../css/resevation.css">
        <link rel="stylesheet"  href="../css/Style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    </head>

        
        <!-- This is header section -->
        <header>
            <div class="front-row">
                <div class="logo-section"><a href="../HTML/Home.php"><img src="../images/Dream new.png" style="width:425px; height: 140px; margin-top: 5px; margin-left: 40px;"></a></div>
                <div class="login-section">
                    <div class="btn-packs">
                        <div class="log">
                            <span ><a style="color: black;text-align: center;
                                padding:8px 0 0 0;font-family: 'Koulen', cursive; font-size: 25px; font-weight: 30px;"  href="../HTML/Login.php">log-in</a></span>
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
        <br><br><br><br><br><br>
        <body style=" height: 95vh;
        background-image: url('../images/res\ new.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        margin-top: 0%;">
        <div class="bimage">
           
            <section style="width:100%;" class="logingbody">
	        <div id="formStyle">
            <h1 class="reservation">Reservations</h1>
		    <center>
		    <form action="" >
		    <fieldset>
                
           
                <div class="forms">

               
					<label for="name">Hotel Name</label>
					<input type="text" id="name" required>

					<label for="date">Date</label>
					<input type="text" id="Date" required>

                    <label for="Customer Name">Customer Name</label>
					<input type="text" id="Customer Name" required>

                   <label for="Contact Number">Contact Number</label>
					<input type="text" id="Contact Number" required>


					<label for="email">Email</label>
					<input type="text" id="email" required>		

					<label for="Type of Wedding Destination">Type of Wedding Destination</label>
					<input type="text" id="Type of Wedding Destination" required>

                    <label for="No.of serving">No.of servings</label>
					<input type="text" id="No.of servings" required>
					
                    <button type="submit" value="submit" class="Btn1" onclick="round()"><a href="../HTML/payment.html">Check Availability & Price</a></button>
               </div>
		</div>	
		</fieldset>
		</form>
		</center>
    </div>
	</section>
</div>

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
