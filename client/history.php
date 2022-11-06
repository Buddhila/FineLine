<?php include_once('../server/Db.php') ?>
<html>
    <head><title></title>
 <link rel="stylesheet" href="./history.css">
</head>
    <body>
        <h1>Update Order Details</h1>
        <form action="../server/update_order.php" method="post">
        <?php

        $sql =" SELECT * FROM `order`WHERE `refnumber`= '".$_GET["id"]."'";

        $result=mysqli_query($con,$sql);

        if(mysqli_num_rows($result)>0)
        {
            $row =mysqli_fetch_assoc($result);
            ?>

            <label for="">Ref Number</label> <br><input type="text" name="refnum" value="<?php echo $row["refnumber"];?>" readonly > <br>
            <label for="">site name</label><br> <input type="text" name="snam" value="<?php echo $row["site_name"];?>"> <br>
            <label for="">buyer</label><br> <input type="text" name="buyer" value="<?php echo $row["buyer"];?>"> <br>
            <label for="">Total bill</label><br> <input type="text" name="totalbill" value="<?php echo $row["total"];?>"> <br>
            <label for="">Contact</label><br> <input type="text" name="contact" value="<?php echo $row["contact"];?>"> <br>
             <input type="radio" name="ststus" id="p1"value="pending" 
             <?php if($row["status"]=="pending") {echo "checked";}?> > pending 
             <input type="radio" name="ststus" id="c1" value="Confirm" 
             <?php if($row["status"]=="Confirm") {echo "checked";}?>> Confirm
             <input type="radio"  name="ststus"  id="cc1"value="cancle" 
             <?php if($row["status"]=="cancle") {echo "checked";}?>> cancle
             <?php
        }
        mysqli_close($con);
        ?>
        <br><button>submit</button>
        <a href="./home.php"></a><button>Back</button>
        </form>
    </body>
</html>