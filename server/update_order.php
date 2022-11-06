<?php
 
include_once ('./Db.php');


$ref =$_POST["refnum"];
$sitename = $_POST["snam"];
$buyer = $_POST["buyer"];
$contat= $_POST["contact"];
$total= $_POST["totalbill"];
$status=$_POST["ststus"];



                $sql="UPDATE `order` set  `site_name`='".$sitename."',  `buyer`='".$buyer."',  `contact`='".$contat."', `total`='".$total."',`status`='".$status."' WHERE `refnumber`='".$ref."'  ";

					if(mysqli_query($con,$sql))
					{
						echo "file updated Sucessfully";
					  	header('location:../client/home.php');
					} else {
						echo (mysqli_error($con));
					}
	
?>