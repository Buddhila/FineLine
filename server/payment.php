<?php
 
include_once './Db.php';


	$itemName =$_POST["refnum"];
	$total = $_POST["totalbill"];
	$pending =$_POST["pendig-pay"];
	$amount =$_POST["amount"];
	
$tot = $pending-$amount;

$sql=   "UPDATE `order` SET `p_pay`='".$tot."'WHERE `refnumber`='".$itemName."'";

if(mysqli_query($con,$sql))
{
    echo "file updated Sucessfully";
      header('location:../client/home.php');
} else {
    echo (mysqli_error($con));
}             
	
?>