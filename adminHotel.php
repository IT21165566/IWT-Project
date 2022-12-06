
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Hotel Details</title>
    <link rel="stylesheet"  href="../CSS/admin.css">
    
</head>
    <body>
        <section id="menu">
            <div class="logo">
            <img src="../images/Dream new.png" alt="">
                <h2 class="title">Administration</h2>
            </div>
            <div class="items">
            <li><img src ="../images/dashboard.png"><a href="../HTML/adminDashboard.php" id="addashboard"  class="addashboard" >Dashboard</a></li>
            <li><img src ="../images/hotel.png"><a href="../HTML/adminHotel.php" id="adhotel"  class="adhotel" >Hotels</a></li>
            <li><img src ="../images/customer.png"><a href="../HTML/adminCustomer.php" id="adcustomer"  class="adcustomer" >Customers</a></li>
            <li><img src ="../images/reservation.jpg"><a href="../HTML/adminReservation.php" id="adreservation"  class="adreservation" >Reservations</a></li>
            <li><img src ="../images/logout.png"><a href="#" class="adlogoutbutton" id="adlogoutbutton" >Logout</a></li>
        </div>
        </section>

    <section id="iterface">
        <div class="navigation">

                <div>
                   <!--  <a href="#" class="adddobtn" id="adddobtn" >Add Doctor</a>-->
                   <button type="click" class="adddobtn" id="adddobtn">Add Hotels</button>
                </div>
                <div class="adminloggedin1">Welcome Admin!</div>
            <div class="admintop">
            <img class="adminpic" src="../images/mainadmin.jpg">
            </div>
            </div>
        <h3 class="d-title">Hotels</h3>

        <div class="board">
            <h3 class="sub-title">Available Hotels</h3>
            <table width="100%">
                <thead>
                    <tr>
                        <td>Hotel Name</td>
                        <td>Hotel Location</td>
                        <td>Conatct Number</td>
                        <td>Hotel Email</td>
                         
                    </tr>
                </thead>
                <tbody>

                <?php
                require("connection.php");
                $sql="SELECT * From registerhotel";
                if($result=$con->query($sql)){
                    if($result->num_rows>0){
                        while ($row=$result->fetch_assoc()) {

                        ?>
                            <tr>
                                <td>
                                    
                                    <div class="appdetails">
                                        <h5><?=$row['Hname'];?></h5>
                                    </div>
                                </td>


                                <td >
                                    <h5><?=$row['HLocation'];?></h5>
                                </td>

                                <td >
                                    <h5><?=$row['HContact'];?></h5>
                                </td>


                                <td>
                                    <h5><?=$row['HEmail'];?></h5>
                                </td>
                                 
                                <!-- <td class="dashdoccheck1" ><a href="#">Edit</a></td> -->
                                <td class="dashdoccheck2" ><a href="delete.php?id=<?=$row['HID'];?>"> Remove</a></td>

                            </tr><?php
                        }
                    }
                }

?>
               

                </tbody>
            </table>
        </div>
    </section>
    <div class="bg-modal">
        <div class="modal-content">
        <img src="../imagesuser.png" alt="" class="useravatar">
            <li class="adminlogout">Are you sure you want to log out?</li>
            <div class="adminlogoutb">
                <div class="adminlogoutb1"><a href="#" class="adlogoutcancel" >Cancel</a></div>
                <div class="adminlogoutb2"><a href="#" class="adlogoutout" id="adlogoutout" >Log Out</a></div>
            </div>
        </div>
    </div>

    
  <!-- <form action="/action_page.php">
        
        <div class="adddocmodal">
            <h1>Add Doctor</h1>
            <p>Please fill in this form to add a doctor.</p>
            <hr> -->

        <div class="addoccontainer">
        
            <form method="post">
                <div class="addocform-group">

                    <br><label for="adddocname" ><b>Enter Name</b></label>
                    <input type="text" placeholder="Enter Name" name="adddocname" id="adddocname" required>

                </div>
                <div class="addocform-group">

                    <label for="adddocusername"><b>User Name</b></label>
                    <input type="text" placeholder="Enter User Name" name="adddocusername" id="adddocusername" required>
                </div>

                    <div class="addocform-group">
                    <label for="adddocgender"><b>Male</b></label>
                    <input type="radio" placeholder="Select gender" name="adddocgender" id="adddocgender" required>
                    <label for="adddocgender"><b>Female</b></label>
                    <input type="radio" placeholder="Select gender" name="adddocgender" id="adddocgender" required><br><br>
                </div>
                    <div class="addocform-group">
                    <label for="adddoctype"><b>Doctor Type</b></label>
                    <input type="text" placeholder="Doctor Type" name="adddoctype" id="adddoctype" required>
                </div>
                
                    <div class="addocform-group">
                    <label for="adddocloacation"><b>Location</b></label>
                    <input type="text" placeholder="Enter Location" name="adddocloacation" id="adddocloacation" required>
                </div>

                    <div class="addocform-group">
                    <label for="adddocprice"><b>Price</b></label>
                    <input type="text" placeholder="Enter Price" name="adddocprice" id="adddocprice" required>
                </div>
                
                    <div class="addocform-group">
                    <label for="adddocrole"><b>Doctor</b></label>
                    <input type="radio" placeholder="Type something..." name="adddocrole" id="adddocrole" required>
                    <label for="adddocrole"><b>Specialised</b></label>
                    <input type="radio" placeholder="Type something..." name="adddocrole" id="adddocrole" required><br><br>
                </div>
                    <div class="addocform-group">
                    <label for="adddocdescription"><b>Description</b></label>
                    <input type="text" placeholder="Type something..." name="adddocdescription" id="adddocdescription" required>
                </div>
                
                    <div class="addocform-group">
                    <label for="adddocemail"><b>Email</b></label>
                    <input type="email" placeholder="Enter Email" name="adddocemail" id="adddocemail" required>
                </div>

                    <div class="addocform-group">
                    <label for="adddocpsw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="adddocpsw" id="adddocpsw" required>
                </div>
                
                       
                        <div class="addocform-group">
                            <button type="submit" name="submit" class="addocbtn">Add Hotels</button>
                            <button type="text" class="addoccancelbtn">Cancel</button>
                          
                        </div>
            </form>
     
        </div>
        <script src="../images/admin.js"></script>
</body>
</html>