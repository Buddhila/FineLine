<?php
 
include_once './Db.php';


	$Cname =$_POST["txtname"];
	$discription = $_POST["txtdiscription"];
	$benifit =$_POST["txtB-st"];
	$timeDuration = $_POST["txttime"];
	$coverarea =$_POST["txtcoverarea"];
	$cost = $_POST["txtcost"];


					$sql="INSERT INTO `createcourse`( `Course_Name`, `discription`, `covering_area`, `benifit`, `cost`, `time_duration`, `publish`, `L-id`)
                     VALUES ('".$Cname."','".$discription."','".$coverarea."','".$benifit."','".$cost."','".$timeDuration."',0,'".$_SESSION["txtLid"]."');";

					if(mysqli_query($con,$sql))
					{
						echo "file updated Sucessfully";
					  	header('location:../client/home.php');
					} else {
						echo (mysqli_error($con));
					}
	
?>