<?php
 
include_once './Db.php';


	$itemName =$_POST["itemName"];
	$itemPrice = $_POST["itemPrice"];
	$qty =$_POST["qty"];
	


	              $sql=   "INSERT INTO `tempery_item`(`item_name`, `unit`, `quntity`) VALUES ('".$itemName."','".$itemPrice."','".$qty."')";
                     

					if(mysqli_query($con,$sql))
					{
						echo "file updated Sucessfully";
					  	header('location:../client/home.php');
					} else {
						echo (mysqli_error($con));
					}
	
?>