<?php
//The connection object
$con=new mysqli("localhost","root","","hotel");
// Check connection
if($con->connect_error){
die("Connection failed: " . $con->connect_error);
}
?>