<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Dashboard</title>
    <link rel="stylesheet" href="../CSS/admin.css">

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
              
              <button style=" background-color: crimson;" type="text" class="addpabtn" id="addpabtn">Add Customers</button>
            </div>
            <div class="adminloggedin1">Welcome Admin!</div>
            <div class="admintop">
            <img class="adminpic" src="../images/mainadmin.jpg">
            </div>
            </div>
        <h3 class="d-title">Customers</h3>
        <div class="board">
            <h3 class="sub-title">Customers Details</h3>
            <table width="100%">
                <thead>
                    <tr>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>DOB</td>
                        <td>Address</td>
                        <td>Mobile Number</td>
                        <td>Email</td>
                        <td>Gender</td>
                    </tr>
                </thead>
                <tbody>

                <?php
                require("connection.php");
                $sql="SELECT * From registercustomer";
                if($result=$con->query($sql)){
                    if($result->num_rows>0){
                        while ($row=$result->fetch_assoc()) {

                        ?>
                            <tr>
                                <td>
                                   
                                    <div class="appdetails">

                                        <h5><?=$row['CFname'];?></h5>
                                    </div>
                                </td>


                                <td >
                                    <h5><?=$row['CLname'];?></h5>
                                </td>

                                <td >
                                    <h5><?=$row['CDOB'];?></h5>
                                </td>


                                <td>
                                    <h5><?=$row['CAddress'];?></h5>
                                </td>

                                
                                <td>
                                    <h5><?=$row['CMobile'];?></h5>
                                </td>

                                
                                <td>
                                    <h5><?=$row['CEmail'];?></h5>
                                </td>

                                
                                <td>
                                    <h5><?=$row['CGender'];?></h5>
                                </td>
                                 
                                <!-- <td class="dashdoccheck1" ><a href="#">Edit</a></td> -->
                                <td class="dashdoccheck2" ><a href="delete.php?id=<?=$row['CID'];?>"> Remove</a></td>

                            </tr><?php
                        }
                    }
                }

?>

               

                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <div class="bg-modal">
        <div class="modal-content">
        <img src="../images/user.png" alt="" class="useravatar">
            <li class="adminlogout">Are you sure you want to log out?</li>
            <div class="adminlogoutb">
                <div class="adminlogoutb1"><a href="#" class="adlogoutcancel" >Cancel</a></div>
                <div class="adminlogoutb2"><a href="#" class="adlogoutout" id="adlogoutout" >Log Out</a></div>
            </div>
        </div>
    </div>
      <div class="addpatcontainer">
            <form method="post">
                <div class="adpatform-group">

                    <br><label for="addpatname" ><b>Enter Name</b></label>
                    <input type="text" placeholder="Enter Name" name="addpatname" id="addpatname" required>

                </div>
                <div class="adpatform-group">

                    <label for="addpatusername"><b>User Name</b></label>
                    <input type="text" placeholder="Enter User Name" name="addpatusername" id="addpatusername" required>
                </div>
                
                    <div class="adpatform-group">
                    <label for="addpatloacation"><b>Location</b></label>
                    <input type="text" placeholder="Enter Location" name="addpatloacation" id="addpatloacation" required>
                </div>
                
                    <div class="adpatform-group">
                    <label for="addpatdescription"><b>Special Note</b></label>
                    <input type="text" placeholder="Type something..." name="addpatdescription" id="addpatdescription" required>
                </div>

                                
                    <div class="adpatform-group">
                    <label for="addpatrole"><b>Role</b></label>
                    <input type="text" placeholder="Enter Role" name="addpatrole" id="addpatrole" required>
                </div>
                
                    <div class="adpatform-group">
                    <label for="addpatemail"><b>Email</b></label>
                    <input type="email" placeholder="Enter Email" name="addpatemail" id="addpatemail" required>
                </div>

                    <div class="adpatform-group">
                    <label for="addpatvoice"><b>Phone Number</b></label>
                    <input type="tel" placeholder="Enter Email" name="addpatvoice" id="addpatvoice" required>
                </div>
                
                    <div class="adpatform-group">
                    <label for="addpatpsw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="addpatpsw" id="addpatpsw" required>
                </div>

                    <!--<div class="adpatform-group">
                    <label for="psw-repeat2"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat2" id="psw-repeat2" required>-->


                    <div class="adpatform-group">
                    <button type="submit" name="submit" class="adpatbtn">Add Patient</button>
                    <button type="text" class="adpatcancelbtn" id="adpatcancelbtn">Cancel</button>
                </div>
  
        
            </form>
        </div>
        <script src="../js/admin.js"></script>
</body>
</html>