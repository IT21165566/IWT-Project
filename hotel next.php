<!DOCTYPE html>
<html>
<head>
<title>Hotels</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../CSS/Style.css" rel="stylesheet" type="text/css" />
<link href="../CSS/hotel.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="../Js/hotel next.js" defer></script>

</head>
<body style=" height: 40vh;
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
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="search-container">
  <form action="/action_page.php">
    <input type="text" name="search" id="mySearch" onkeyup="myFunction()" placeholder="Search..">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>
</div>

<br><br><br><br><br><br>
<br><br><br><br>

<div class="hotel">

<div class="row">
  
  <div class="column">
    <a href="#">
    <div class="container">
      <img src="../images/Senuri.jpg" alt="Hiton" style="width:100%;">
      <div class="content">
        <h1>Senuri</h1>
        <p>
          <i style="font-size:24px;color:crimson" class="fa">&#xf041;</i> Negombo  
          <div class="rate">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </div> 
        </p>
      </div>
    </div>
    </a>
  </div>

  <div class="column">
    <a href="shangrilla.html">
    <div class="container">
      <img src="../images/shangrila.jpg" alt="Hiton" style="width:100%;">
      <div class="content">
        <h1>Shangrilla</h1>
        <p>
          <i style="font-size:24px;color:crimson" class="fa">&#xf041;</i> Colombo  
          <div class="rate">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </div> 
        </p>
      </div>
    </div>
    </a>
  </div>

</div>

</div>
<br>
<div class="nextpre">
  <a href="../HTML/hotel.html" class="previous">&laquo; Previous</a>
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


