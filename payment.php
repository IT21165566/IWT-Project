<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
        <link rel="stylesheet"  href="../css/payment.css">
        <!-- <link rel="stylesheet"  href="../CSS/Style.css"> -->
        <!--<link rel="stylesheet"  href="../css/resevation.css">-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <body style=" height: 20vh;
        background-image: url('../images/payment4.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        margin-top: 0%;"> 
    </head>
        <!-- This is header section -->
        <header>
            <div class="front-row">
                <div class="logo-section"><a href="../HTML/Home.php"><img src="../images/Dream new.png" style="width:425px; height: 120px; margin-top: 5px;"></a></div>
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
      

    <h1 class="style">Payment Details</h1>
<div class="set">
	<section style="width:70%">
	    <div id="formStyle">
        <center>
		<form action="#">
            <legend>Payment Method</legend><br>
			<fieldset>
                
				<div class="col-50">
					<label for="reservation">Reservations No:</label>
					<input type="text" name="reservation" id="reservation" placeholder="Enter the reservation number here..." required>

                    <form action="/action_page.php">
                        <label for="Date">Date:</label>
                        <input type="Date" id="Date" name="Date">
            
                    </form>
                    <label for="reservation fee">Reservations fee:</label>
					<input type="text" name="fee" id="fee" placeholder="Enter the Reservations fee here...Rs" required>
                    <div class="pmethod">
							<div class="col-50">				
								<label for="options">Payment Method:</label>
								<select name="payment" id="payment">
									<option value="" disabled selected>-- Select --</option>
									<option value="Cash">Cash</option>
									<option value="Checks">Checks</option>
									<option value="Credit cards">Credit Cards</option>
									<option value="Debit cards">Debit Cards</option>
									<option value="Mobile payments">Mobile Payment</option>
									<option value="Electronic bank transfers">Electronic Bank Transfers</option>
									
								</select>
							</div>
							
					</div>	
                    <br><input type="checkbox" id="checkBox1" onclick="enableButton1()"></input>  <i style="font-size: 20px;">I confirm that the above information is true.</i>
                    <button style="width: 200px;" style type="submit" value="submit" class="Btn1" onclick="round()"> Pay Now</button>
				</div>
			    </fieldset>
					
			    
            </form>		
        </center>

    </section></div>

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
        
       


       


