<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Plan.com</title>
    <link rel="stylesheet" href="../CSS/Home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../Js/Home.js" defer></script>
</head>
<body>
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
    <!-- <div class="filter-options">
        <div class="filter">
            <span>Filter</span>
        </div>
        <div class="first-row">
            <div class="option">
                <label class="lstyles">Location</label>
                <select>
                    
                    <option>Colombo</option>
                    <option>Gampaha</option>
                    <option>Kalutara</option>
                    <option>Galle</option>
                    <option>Matara</option>
                    <option>Kurunagala</option>
                </select>
            </div>
            <div class="option">
                <label class="lstyles">Date</label>
                <input type="date">
            </div>
            <div class="option">
                <label class="lstyles">No Of Servings</label>
                <input type="text" id="servings" name="noOf">

            </div>
            <div class="option">
                <label class="lstyles">Amount</label>
                <input class="range-modifier" type="range">
            </div>
        </div>
        <div class="second-row">
            <button class="log" type="submit" value="submit">SUBMIT</button>
        </div>
    </div> -->
    <section aria-label="wedding-banner">
        <div class="carousel" data-carousel>
                    <!-- <button class="c-btn previous" data-c-btn="prev">&#8676;</button>
                    <button class="c-btn next" data-c-btn="next">&#8677;</button> -->

                    <div class="slider">
                        <img src="../images/W1.jpg" id="banner_image">
                </div>  
                </div>
                <br>
             
            </section>
            <div class="welcome-banner">
                <div class="head-text">
                    <p>Welcome</p>
                </div>
                <hr>
                <div class="description">
                    <p>
                        Your wedding day is about creating once-in-a-lifetime moments. We want those moments to be the most memorable.  
                        Here on our website, we have a vast number of hotels available in Sri Lanka.  
                        You can choose a wedding hall of your choice for a vibrant destination wedding in Sri Lanka with a wide array of sceneries and facilities.  
                        We have allowed you to select a hotel and make your reservation online on our platform. Lets' make your dream wedding a reality.

                    </p>
                </div>
                <hr style="margin-top: 5em; margin-bottom: 0.2em;">
                <div class="top-hotels">
                    <div class="head-text">
                        <p>Top-Hotels</p>
                    </div>
                    <hr style="margin-bottom: 5em;" >
                    <div class="hotel-list">
                        <div class="hotel-item" id="place-1">
                            <p>Shangrilla Colombo</p>
                        </div>
                        <div class="hotel-item" id="place-2">
                            <p>Cinnamon Grand Colombo</p>
                        </div>
                        <div class="hotel-item" id="place-3">
                            <p>Citrus Bay Waskaduwa</p>
                        </div>
                        <div class="hotel-item" id="place-4">
                            <p>Avenra Graden Negombo</p>
                        </div>
                        <div class="hotel-item" id="place-5">
                            <p>Galadari Colombo</p>
                        </div>
                        <div class="hotel-item" id="place-6">
                            <p>Heritance Negombo</p>
                        </div>
                        <div class="hotel-item" id="place-7">
                            <p>Hilton Colombo</p>
                        </div>
                        <div class="hotel-item" id="place-8">
                            <p>Jetwing Panadura</p>
                        </div>
                        <div class="hotel-item" id="place-9">
                            <p>Kingsbury Colombo</p>
                        </div>
                        <div class="hotel-item" id="place-10">
                            <p>Senuri Negombo</p>
                        </div>
                     
                    </div>

                    <div class="booking-banner">
                        <div class="mid-text">
                            <p>Things to keep in mind when booking your wedding hotel</p>
                        </div>
                        <hr>
                        <br> 
                        <div class="mid-description">
                            <p>
                                A wedding happens only once. So, booking a venue for your big day should be done very carefully.
                                With wedding hotels popping up at every corner in Sri Lanka and many factors to consider choosing a venue 
                                for your wedding can be an overwhelming decision to make. Thus, we’ve listed some facts to keep in mind when 
                                selecting and booking your wedding hotel, to help you are selecting the perfect choice for your special day without much hassle.
                            </p></div>
                            <br>
                            <div class="mid-description">
                            <p>
                                Step 1 -Your requirements
                            </p>
                            </div>
                            <br>
                            <div class="mid-description">
                                <p>
                                    Getting clear with your requirements before anything will help you make your wedding venue hunt in Colombo less overwhelming. 
                                    Thus, start by listing out all your requirements for your ideal wedding venue with your partner.
                                    Here getting your close family members can be helpful so you have the opinion of a third party.
                                </p>
                                </div>
                                <br>
                                <div class="mid-description">
                                    <p>
                                        Some of the things you need to consider here are

                                    </p>
                                    </div>
                                    <div class="mid-description">
                                        <p> - Location</p>
                                    </div>
                                    <div class="mid-description">
                                        <p> - Budget</p>
                                    </div>
                                    <div class="mid-description">
                                        <p> - Number of guests</p>
                                    </div>
                                    <div class="mid-description">
                                        <p> - Date</p>
                                    </div>
                                    <div class="mid-description">
                                        <p> - Wedding Theme</p>
                                    </div>
                                    <br>
                                    <div class="mid-description">
                                        <p> Once you have a clear idea of what kind of a wedding venue you are looking 
                                            for you can start searching for wedding hotels in the relevant area to fit your requirements.</p>
                                    </div> 
                                    <div class="mid-description">
                                        <p> When you are searching for a venue, learning about its service reputation and flexibility is 
                                            important. Here make sure you drop options that do not fit your list of requirements soon,
                                             no matter how beautiful the venue is so you can save a lot of hassle.
                                        </p>
                                    </div>    
                                    <br>
                                    <div class="mid-description">
                                        <p> Step 3- Pay a visit</p>
                                    </div>
                                    <br>
                                    <div class="mid-description">
                                        <p> After you have a list of potential wedding hotels list, 
                                            you can start comparing and narrowing down your options. 
                                            Then try to make time to pay a visit to each wedding venue even 
                                            if you have a wedding planner to take care of everything.
                                        </p>
                                    </div>

                                    <div class="mid-description">
                                        <p> It’s your special day that you will remember for a lifetime. So, it’s always worth paying a visit in 
                                            person no matter how magical the venue looks in photos, and making sure every little detail is as you like. During your visits, 
                                            gather all the information you need from the staff on prices, additional charges, services, and support they can provide.
                                        </p>
                                    </div>
                                    <br>
                                    <div class="mid-description">
                                        <p> Step 4- Set your priorities
                                        </p>
                                    </div>
                                    <br>
                                    <div class="mid-description">
                                        <p> Just as you are concerned about convenience, budget, and practicality, you need to think about your lifelong dreams
                                            for the day too. Do you need a modern and simple space or a dramatic place with chandeliers and tall towers?
                                             Do you need an outdoor ceremony or an indoor ceremony? 
                                            Need an extravagant settee back or a firework display? Make sure the venue you are choosing can help you make your dreams come true.
                                        </p>
                                    </div>
                                    <br>
                                    <div class="mid-description">
                                        <p> Step 5- Narrow down your options
                                        </p>
                                    </div>
                                    <br>
                                    <div class="mid-description">
                                        <p> After you’ve gathered all the information about the venue, their services, 
                                            availability, charges…etc. compare your options and make your decision.
                                        </p>
                                    </div>
                                 
                                    <div class="mid-description">
                                        <p> It’s always wise to book your venue sooner, so you don’t have to risk losing
                                             the wedding venue of your dream to another couple who has their wedding on the same day as yours.
                                        </p>
                                    </div>
                                 </div>
                        </div>
                </div>    
            </div>
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







