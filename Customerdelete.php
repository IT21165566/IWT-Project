<?php
   $id=$_GET['id'];
   require("connection.php");
   echo $id;
   
    $sql="DELETE from registercustomer WHERE CID='$id'";
    $con->query($sql);
    if($con->query($sql)){
        echo"deleted";
        header("Location:adminCustomer.php");

    }

    else
    {
        echo "eroor";
        header("Location:adminCustomer.php");
    }

?>