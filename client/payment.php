<?php include_once('../server/Db.php') ?>
<html>
    <head><title></title>
 <link rel="stylesheet" href="./history.css">
</head>
    <body>
        <h1>Payment</h1>
        <form action="../server/payment.php" method="post">
        <?php

        $sql =" SELECT * FROM `order`WHERE `refnumber`= '".$_GET["id"]."'";

        $result=mysqli_query($con,$sql);

        if(mysqli_num_rows($result)>0)
        {
            $row =mysqli_fetch_assoc($result);


            ?>

            <label for="">Ref Number</label> <br><input type="text" name="refnum" value="<?php echo $row["refnumber"];?>" readonly > <br>
            
            
            <label for="">Total bill</label><br> <input type="text" name="totalbill" readonly value="<?php echo $row["total"];?>"> <br>
            <label for="">Panding payemnt</label><br> <input type="text" name="pendig-pay"  readonly value="<?php echo $row["p_pay"];?>"> <br>
            <label for="">payemnt Amount</label><br> <input type="text" name="amount" value="" placeholder="Payment amount"> <br>
             
             <?php
        }
        mysqli_close($con);
        ?>
        <br><button>submit</button>
        <a href="./home.php"></a><button>Back</button>
        </form>
    </body>
</html>