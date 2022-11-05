<?php session_start();?>
<?php
include_once './Db.php';

if (isset($_POST["btnsubmit"])) {
	
	$userid = $_POST["txtusername"];
	$password = $_POST["pwd"];
    


   
   $sql= "SELECT * FROM `user` WHERE `user`='".$userid."' AND `password`='".$password."'";

    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        $valid = true;
    }
	} else {
    $valid = false;
	}

	if ($valid) {
    $_SESSION["txtusername"] = $userid;
		
	
		
    header("Location:../client/home.php");
	} else {
    echo "Please enter correct usernamr and password";
		 header("Location:../client/index.html");
	}

?>

