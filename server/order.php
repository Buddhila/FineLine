<?php

include_once './Db.php';


	$ref =$_POST["refnum"];
	$sitename = $_POST["sitename"];
	$supplier =$_POST["supplier"];
	$buyer = $_POST["bname"];
	$email =$_POST["email"];
	$Address = $_POST["Address"];
	$Date = $_POST["Date"];
	$contat= $_POST["con-num"];
	$total= $_POST["Total"];
	$comment= $_POST["comment"];



					$sql="INSERT INTO `order`(`refnumber`, `site_name`, `supplier`, `buyer`, `email`, `address`, `date`, `contact`, `total`, `comment`) 
                    VALUES ('".$ref."','".$sitename."','".$supplier."','".$buyer."','".$email."','".$Address."','".$Date."','".$contat."','".$total."','".$comment."');";

					if(mysqli_query($con,$sql))
					{
						echo "file updated Sucessfully";
					  	header('location:../client/home.html');
					} else {
						echo (mysqli_error($con));
					}
	
?>