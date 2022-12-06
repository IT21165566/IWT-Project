<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinnamon Grand</title>
    <link rel="stylesheet" href="../CSS/Style.css">
    <link rel="stylesheet" href="../CSS/Hotel2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../Js/Hotel1.js" defer></script>
</head>

<body style=" height: 6vh;
margin-top: 0%;">
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
    <br><br><br><br><br><br><br><br><br><br>

    <div class="row">
        <div class="card">
          <h2 style="font-size: 50px">Cinnamon Grand</h2>
          <!-- <h5>Title description, Dec 7, 2017</h5> -->
        </div>
    </div>
    
    <div class="row">
        <div class="leftcolumn">
    
          <div class="card">
            <div class="hotelimg" style="height:370px;">
              <img src="../images/Cinemon.jpg" height="100%" width="100%">
            </div>
          </div>
    
          <div class="card">
            <!-- <ul>
                <li><a class="active" href="#details">Details</a></li>
                <li><a href="#hallsavailable">Halls Available</a></li>
                <li><a href="#pandv">Photos and Videos</a></li>
                <li><a href="#wrireview">Write a Review</a></li>
            </ul> -->
            <br>
            <p id="details">
              <br>
              <h3 style="font-size: 30px; font-weight: bold;">DETAILS</h3><br><br>
              <p style="font-size: 20px">Savour your penchant for finer comforts. Partner with sheer luxury at Cinnamon Grand, as you attend a business event in the capital city. Let the opulence of our meeting rooms and conference halls seep into flourishing work partnerships. Raise a toast to all the success at our plush restaurants and taste jubilance like never before. When you’ve enjoyed every bit of your Grand accomplishments, retire to your room, and relish in the exquisite comforts that Colombo’s most lavish business hotel has to offer.</p>
             <br> <br>
              <h4 style="font-size: 30px;">Facilities</h4> <br><br>
              <ul style=" font-size: 20px;" class="normal">
              
                <li>- Pool</li><br><br>
                <li>- Free WiFi</li><br><br>
                <li>- Air conditioning</li><br><br>
                <li>- parking included</li><br><br>
                <li>- Spa</li><br><br>
                <li>- Sauna</li><br><br>
                <li>- Check-in/out [express]</li><br><br>
              </ul> 
            </p>
            <br><br>
            <p id="hallsavailable">
              <br>
              <h3 style="font-size: 30px;font-weight: bold;"">Halls Available</h3><br><br>
              <ul>
              <li style="font-size: 25px">- Venue Finder </li><br><br><br>
              <li style="font-size: 25px">- Oak room</li><br><br><br>
              <li style="font-size: 25px">- Granding Hall</li><br><br><br>
              <li style="font-size: 25px">- Sunset Hall</li><br><br><br>
              <li style="font-size: 25px">- Samudra Hall</li>
            </ul>
            
            <p id="pandv">
              <br> <br> <br>
              <h3 style="font-size: 30px;font-weight: bold;"">Photos and Videos</h3>
              <!-- The five columns -->
              <br><br><br>
                <div class="row">
                  <div class="column">
                    <img src="../images/the atrium.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
                  </div>
                  <div class="column">
                    <img src="../images/cfc9f41a5842f64c90fcff600b22f5fb.jpg" alt="Snow" style="width:100%" onclick="myFunction(this);">
                  </div>
                  <div class="column">
                    <img src="../images/regular-large-Q1n-869_angsana_garden_-_wedding.jpg" alt="Mountains" style="width:100%" onclick="myFunction(this);">
                  </div>
                  <div class="column">
                    <img src="../images/the atrium.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
                  </div>
                  <div class="column">
                    <img src="../images/the oak room.jpg" alt="Mountains" style="width:100%" onclick="myFunction(this);">
                  </div>
                </div>
    
    
                <div class="container">
                  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
                  <img id="expandedImg" style="width:100%">
                  <div id="imgtext"></div>
                </div>
            </p>
    <br>  <br>  <br>  <br>  <br> 
            <span style="font-size: 30px; font-weight:bold" class="heading">User Ratings</span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <br><br>
          <p style="font-size: 25px">4 average based on 271 reviews.</p>
          <br><br>
          <hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>70</div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>160</div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>15</div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>6</div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>20</div>
  </div>
</div>
          </div>
        </div>
    
        <div class="rightcolumn">
          <div class="card">
            <h3 style="font-size: 30px;">LOCATION</h3>
            <br> <br>
            <div class="location" style="height:250px;">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15868.204321447964!2d80.1111567!3d6.1238282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x63d0808cbc80cc8f!2sAvenra%20Beach%20Hotel!5e0!3m2!1sen!2slk!4v1652380511108!5m2!1sen!2slk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
          <br><br>
          <div class="card">
            <h3 style="font-size: 30px;">CONTACT</h3>
            <!-- <hr class="rule"> -->
            <div class="contact"><br><br>
              <ul>
                <li>Website : https://www.Cinnamon Grand.com/ </li><br><br><br>
                <li>Address : 77 Siri Uttarananda Mawatha, Colombo 00300</li><br><br><br>
                <li>Email : delivery.grand@cinnamonhotels.com.</li><br><br><br>
                <li>Contact No : 0112 437 437</li><br>
              </ul>
            </div>
          </div>
          <br><br>
          <div style="height: 110vh" class="card">
            <h3></h3>
            <div class="fakeimg" style="height:10px;"><img style="height: 200px; width: 400px;" src="../images/new wing.jpg"></div><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <div class="fakeimg" style="height:100px;"><img style="height: 200px; width: 400px;" src="../images/regular-large-88v-869_oak_room_-_wedding.jpg"></div><br><br><br><br><br><br><br><br>
            <div class="fakeimg" style="height:100px;"><img style="height: 200px; width: 400px;" src="../images/099be27c7be50e95b03c2255301dac58--colombo-outdoor-weddings.jpg"> </div>
          </div>
        </div>
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

