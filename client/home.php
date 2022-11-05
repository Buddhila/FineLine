<?php include_once('../server/Db.php') ?>
<html>
    <head>
        <title>FineLine | Construction Company</title>
        <link rel="stylesheet" href="./style.css">
        <script type="text/javascript" src="./display.js"	></script>
    </head>
    <body>
        <div class="body">
    <div class="header">
        <h1>FineLine</h1>
        <img src="../img/logo.png" alt="logo" class="img-1">
        <div class="button-list">
        <button onclick="view1();">Purchase Order</button> <br>
        <button onclick="view2();">Purchase History</button> <br>
        <button onclick="view3();">View Invoice</button> <br>
        <button onclick="view4();">Create Credit Note</button> <br>
        <button onclick="view5();">Procedure and policy</button> <br>
        </div>
    </div>
    <div class="pages">
        <!-- ```````````````````````````````````` page1 ````````````````````````````````````-->
      <div class="page1" id="page1">
        <h1 class="head-line">Purchase History</h1>
        <table class="history" border="1">
            <tr>
                <th>Order Referance</th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;Items&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th>Qty</th>
                <th>Total Price (Rs)</th>
                <th>Status</th>
                <th>Update</th>
            </tr>
            <tr>
                <td>REF0001</td>
                <td>Cement <br>
                    melt
                </td>
                <td>5 <br>
                    6
                </td>
                <td>33500</td>
                <td>Pending</td>
                <td><button class="e-btn">Edit</button></td>





            </tr>
        </table>
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
            <p>Fineline (Pvt)Ltd <br>
            Nawala Road, Nugegoda <br>
            Phone : +94 112 5635 <br>
            E-mail : fineline@gmail.com <br>
            Website : www.fineline.com</p>
        </div>
        <form action="../server/order.php" method="post" class="form-1">
        <label class="l-1" for="">Referance No</label> <input type="text" name="refnum" placeholder="REF0000"> <br>
        <label class="l-2" for="">Site Name</label> <input type="text" name="sitename" placeholder="Type Site Name"> <br>
        <label class="l-3" for="">Supplier</label> 
        <Select name="supplier">
            <option value="" disabled selected hidden>Select the Supplier</option>
            <option value="chalana">chalana</option>
            <option value="buddhila">buddhila</option>
        </Select>
        <h3 class="topic-1">Items</h3>
        <div class="item-table">
            <div class="item-name">
                <h4>Item</h4>
                <p>Cement</p>
                <p>Cement</p>
            </div>
            <div class="item-q">
                <h4>Qty</h4>
                <p>5</p>
                <p>5</p>
            </div>
            <div class="item-unitprice">
                <h4>Unit Price(Rs)</h4>
                <p>1100</p>
                <p>1100</p>
            </div>
        </div>
        <div class="add-btn">
        <img src="../img/add.png" alt="" onclick="item();">
        <h5>Add Item</h5>
        </div>
        <label class="a-1" for="">Buyer</label> <input type="text" name="bname" placeholder="Type Buyer Name"> <br>
        <label class="a-2" for="">E-mail</label> <input type="email" name="email" placeholder="fineline@gmail.com"><br>
        <label  class="a-3" for="">Address</label> <input type="text" name="Address" placeholder="Type the Delivery Address"><br>
        <label  class="a-4" for="">Date</label> <input type="date" name="Date" placeholder="octomber 22" required><br>
        <label class="a-5" for="">Contact No</label> <input type="text" name="con-num" placeholder="0725625637" required><br>
        <label class="a-6" for="">Total Amount</label> <input type="text" name="Total" placeholder="39,825" readonly value="33500"><br>
        <label class="a-7" for="">Comment</label> <input type="text" name="comment" placeholder="Type Special Instruction" > <br>
        <button class="a-8">Submit</button>
        </form>
        <div class="qq">
        <p>If you have any question about this purchase order, Please contact <br>
            Saman Perera , +94 768 9875 , samanp.fineline@gmail.com</p>
        </div>
        
      </div>
      <div class="itemadd" id="itemadd">
        <h1>Add Item</h1>
        
        <table>
            <tr>
                <th>Item Name</th>
                <th>Unit Price</th>
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
                <td>".$row["item_name"]."</td>
                <td>".$row["unite_price"]."</td> 
                </tr>";
                }}
                ?>
            

            
        </table> 
        <div class="form-1" >
        <form action="../server/add_item.php" >
                <label for="">item 1</label> <input type="text">&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="">unit price</label> <input type="text" name="" id="">&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="">Qty</label> <input type="number" min="1" >
                    <br>
                <label for="">item 2</label> <input type="text">&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="">unit price</label> <input type="text" name="" id="">&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="">Qty</label> <input type="number" min="1" >
                <br>
                <label for="">item 3</label> <input type="text">&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="">unit price</label> <input type="text" name="" id="">&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="">Qty</label> <input type="number" min="1" >
                <br>
                <label for="">item 4</label> <input type="text">&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="">unit price</label> <input type="text" name="" id="">&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="">Qty</label> <input type="number" min="1" >
                <br>
                <label for="">item 5</label> <input type="text">&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="">unit price</label> <input type="text" name="" id="">&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="">Qty</label> <input type="number" min="1" >
                <br>
                <label for="">item 6</label> <input type="text">&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="">unit price</label> <input type="text" name="" id="">&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="">Qty</label> <input type="number" min="1" >
                <br>
                <button name="btn-itm" class="btn-itm">Submit</button>
            </form>
            </div>
    </div>
      <!-- ```````````````````````````````````` page3 ````````````````````````````````````-->
      <div class="page3" id="page3">
        <h1 class="head-line">View Invoice</h1>
      </div>
      <!-- ```````````````````````````````````` page4 ````````````````````````````````````-->
      <div class="page4" id="page4">
        <h1 class="head-line">Create Credit Note</h1>
      </div>
      <!-- ```````````````````````````````````` page5 ````````````````````````````````````-->
      <div class="page5" id="page5">
        <h1 class="head-line">Procedure and policy</h1>
        
      </div>
    </div>
</div>
    </body>
</html>