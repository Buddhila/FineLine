<?php include_once('../server/Db.php') ?>
<html>

<head>
    <title>FineLine | Construction Company</title>
    <link rel="stylesheet" href="./style.css">
    <script type="text/javascript" src="./display.js"></script>
</head>

<body>
    <div class="body">
        <div class="header">
            <h1>FineLine</h1>
            <img src="../img/logo.png" alt="logo" class="img-1">
            <div class="button-list">
                <button onclick="view1();">Purchase Order</button> <br>
                <button onclick="view2();">Purchase History</button> <br>
                <button onclick="view3();">Invoice</button> <br>
                <button onclick="view4();">Credit Note</button> <br>
                <button onclick="view5();">Procedure and policy</button> <br>
            </div>
        </div>
        <div class="pages">
            <!-- ```````````````````````````````````` page1 ````````````````````````````````````-->
            <div class="page1" id="page1">
                <h1 class="head-line">Purchase History</h1>
            <div class="purchaseIn">
                <table class="history" border="1">
                    <tr>
                        <th>Order Referance</th>
                        
                        <th>Total Price (Rs)</th>
                        <th>Status</th>
                        <th>Update</th>
                    </tr>
                    <?php

                    $sql =" SELECT * FROM `order` ";

                    $result=mysqli_query($con,$sql);

                    if(mysqli_num_rows($result)>0)
                    {
                    while($row = mysqli_fetch_assoc($result))
                    {
                    echo"
                    <tr>
                        <td>".$row["refnumber"]."</td>
                        <td>".$row["total"]."</td>
                        <td>".$row["status"]."</td>
                        <td><a href='./history.php?id=".$row["refnumber"]."'><button class='e-btn'>Edit</button></a></td>

                    </tr>";
                    }}
                    ?>
                </table>
                </div>
                <!-- <div class="history">
                <div class="col-1">
                <h3>Order Referance</h3> 
                <p>REF0001</p>
                </div>
                <div class="col-2">
                    <h3>Items</h3>
                    <p>Cement</p>
                </div>
                <div class="col-3">
                    <h3>Qty</h3>
                    <p>5</p>
                </div>
                <div class="col-4">
                    <h3>Total price</h3>
                    <p>33,000</p>
                </div>
                <div class="col-5">
                    <h3>Status</h3>
                    <p>Pending</p>
                </div>
                <div class="col-6">
                    <h3>Update</h3>
                    <button class="e-btn">Edit</button>
                </div>
                </div> -->
            </div>

            <!-- ```````````````````````````````````` page2 ````````````````````````````````````-->
            <div class="page2" id="page2">
                <h1 class="head-line">Purchase Order</h1>
                <div class="details">
                    <p style="font-size:20px ;">Fineline (Pvt)Ltd <br>
                        Nawala Road, Nugegoda <br>
                        Phone : +94 112 5635 <br>
                        E-mail : fineline@gmail.com <br>
                        Website : www.fineline.com</p>
                </div>

            <div class="form">
                <form action="../server/order.php" method="post" class="form-1">
                <div class="formone">
                    <ul>
                    <li>    <label class="l-1" for="">Referance No</label> </li>
                    <li>    <input type="text" name="refnum"
                            placeholder="REF0000" class="ll-1"> </li>
                    </ul>
                    <ul>
                   <li> <label class="l-2" for="">Site Name</label> </li>
                   <li> <input type="text" name="sitename"
                        placeholder="Type Site Name" class="ll-2"> </li>
                        </ul>
                    <ul>
                  <li>  <label class="l-3" for="">Supplier</label></li>
                  <li>  <Select name="supplier" class="ll-3" style="padding: 2px;height:30px;">
                        <option value="" disabled selected hidden>Select the Supplier</option>
                        <option value="chalana">chalana</option>
                        <option value="kasun">kasun</option>
                    </Select></li>
                    </ul>
                </div>
                    <h3 class="topic-1">Items</h3>
                    <div class="item-table">

                        <table class="nonetable">
                            <tr>
                                <th>Item</th>
                                <th>Qty</th>
                                <th>Unit Price(Rs)</th>
                            </tr>
                            <?php

                    $sql =" SELECT * FROM `tempery_item` ";
                    $tot=0;
                    $result=mysqli_query($con,$sql);

                    if(mysqli_num_rows($result)>0)
                    {
                    while($row = mysqli_fetch_assoc($result))
                    {
                    echo" 
                        <tr>
                            <th>".$row["item_name"]."</th>
                            <th>".$row["quntity"]."</th>
                            <th>".$row["unit"]."</th>
                        </tr>
                    
                    "; 
                        $qty=$row["quntity"];
                        $unit=$row["unit"];

                        $multiple=$qty*$unit;

                        $tot=$tot+$multiple;
                
                }}
                
            ?>


                        </table>


                    </div>
                    <div class="add-btn">
                        <img src="../img/add.png" alt="" onclick="item();"></a>
                        <h5>Add Item</h5>
                    </div>
                    <div class="formtwo">
                    <ul>
                    <li><label class="a-1" for="">Buyer</label> </li>
                    <li><input type="text" name="bname"
                        placeholder="Type Buyer Name"> </li>
                    </ul>
                    <ul>
                    <li><label class="a-2" for="">E-mail</label> </li>
                    <li><input type="email" name="email"
                        placeholder="fineline@gmail.com"></li>
                        </ul>
                        <ul>
                        <li><label class="a-3" for="">Address</label> </li>
                        <li><input type="text" name="Address"
                        placeholder="Type the Delivery Address"></li>
                        </ul>
                        <ul>
                        <li><label class="a-4" for="">Date</label> </li>
                        <li><input type="date" name="Date" placeholder="octomber 22"
                        required></li>
                        </ul>
                        <ul>
                        <li><label class="a-5" for="">Contact No</label> </li>
                        <li><input type="text" name="con-num"
                        placeholder="0725625637" required></li>
                        </ul>
                        <ul>
                        <li><label class="a-6" for="">Total Amount</label> </li>
                        <li><input type="text" name="Total" readonly value=<?php
                        echo $tot ?> ></li>
                        </ul>
                        <ul>
                        <li><label class="a-7" for="">Comment</label> </li>
                        <li><input type="text" name="comment"
                        placeholder="Type Special Instruction"></li>
                        </ul>
                        </div>
                    <button class="a-8">Submit</button>
                </form>

            </div>
                <div class="qq">
                    <p style="font-size:20px ; margin-bottom:20px; margin-top:30px;">If you have any question about this purchase order, Please contact <br>
                        Saman Perera , +94 768 9875 , samanp.fineline@gmail.com</p>
                </div>
          
            




           
           
        </div>

        <div class="itemadd" id="itemadd">
                <h1>Add Item</h1>
            <div class="itemaddin">
                <table>
                        <tr>
                            <th>Item Name</th>
                            <th>Unit Price</th>
                            <th>Qty</th>
                            <th></th>
                        </tr>
                    <?php

                            $sql =" SELECT * FROM `item` ";

                            $result=mysqli_query($con,$sql);

                            if(mysqli_num_rows($result)>0)
                            {
                            while($row = mysqli_fetch_assoc($result))
                            {
                            echo"
                            <tr>
                            <form action='../server/add_item.php' method='POST'>
                            
                                <td ><input type='text' name='itemName' value='".$row["item_name"]."'  readonly></td>
                                <td ><input type='text' name='itemPrice' value='".$row["unite_price"]."'  readonly></td>
                                <td>   <input type='number' name='qty' id=''  min='0' required></td> 

                                <td><button>ADD</button></td> 

                            </form>
                            </tr>";
                            }}
                    ?>

                </table>
            </div>
        </div>





        <!-- ```````````````````````````````````` page3 ````````````````````````````````````-->
        <div class="page3" id="page3">
            <h1 class="head-line">Invoice</h1>
            <div class="invoice">
                <table>
                    <tr>
                    <th>Order Referance</th>
                    <th>Buyer Name</th>
                    <th>Billing date</th>
                    <th>Total Amount (Rs)</th>
                    <th>Have to pay</th>
                    <th>Status</th>
                    <th>payment</th>
                    </tr>
                    <?php

             $sql =" SELECT * FROM `order` WHERE `status`='Confirm'  ";

             $result=mysqli_query($con,$sql);

            if(mysqli_num_rows($result)>0)
            {
             while($row = mysqli_fetch_assoc($result))
         {
        echo"
                <tr>
                    <td>".$row["refnumber"]."</td>
                    <td>".$row["buyer"]."</td>
                    <td>".$row["date"]."</td>
                    <td>".$row["total"]."</td>
                    <td>".$row["p_pay"]."</td>
                    <td>".$row["status"]."</td>
                    <td><a href='./payment.php?id=".$row["refnumber"]."'><button>Payment</button></a></td>
                </tr>";
         }}
         ?>
                </table>
            </div>

        </div>
        <!-- ```````````````````````````````````` page4 ````````````````````````````````````-->
        <div class="page4" id="page4">
            <h1 class="head-line">Credit Note</h1>
            <div class="note">
                <table>
                <tr>
                    <th>Order Referance</th>
                    <th>Buyer Name</th>
                    <th>Billing date</th>
                    <th>Total Amount (Rs)</th>
                    <th>Have to pay</th>
                    <th>Status</th>
                    
                </tr>
                <?php

             $sql =" SELECT * FROM `order` WHERE `p_pay` IS NOT NULL ";

             $result=mysqli_query($con,$sql);

            if(mysqli_num_rows($result)>0)
            {
             while($row = mysqli_fetch_assoc($result))
         {
        echo"
                <tr>
                    <td>".$row["refnumber"]."</td>
                    <td>".$row["buyer"]."</td>
                    <td>".$row["date"]."</td>
                    <td>".$row["total"]."</td>
                    <td>".$row["p_pay"]."</td>
                    <td>".$row["status"]."</td>
                    
                </tr>";
         }}
         ?>
                </table>
            </div>
        </div>
        <!-- ```````````````````````````````````` page5 ````````````````````````````````````-->
        <div class="page5" id="page5">
            <h1 class="head-line">Procedure and policy</h1>

        </div>
    </div>


</body>

</html>