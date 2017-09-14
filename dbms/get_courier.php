<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-eqiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap/Nicon.ico" rel="icon">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Ding Dong Couriers</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link href="navbar-top.css" rel="stylesheet">
</head>
<body>
    <a href="front.htm"><b><h1><center>Ding Dong Couriers</center></h1></b></a><hr>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#sender"><h4>Sender</h4></a></li>
        <li><a data-toggle="tab" href="#item"><h4>Item</h4></a></li>
        <li><a data-toggle="tab" href="#payment"><h4>Payment</h4></a></li>
    </ul>
    <div class="tab-content">
        
        <div id="sender" class="tab-pane fade in active">
            
            <b><h2>Enter Sender Details</h2></b>
            <br>
            <form action="save_sender.php" method="post">
            <div class="form-group">
            <h4><label for="sendername"> Name :</label></h4>
                <input type="text" name="sendernameinput" placeholder="FullName" class="form-control"/>
            </div>
            <div class="form-group">
            <h4><label for="address"> Address :</label></h4>
                <input type="text" name="senderaddressinput" placeholder="Fulll Address"  class="form-control"/>
            </div>
            <div class="form-group">
            <h4><label for="contact">Contact :</label></h4>
                <input type="number" name="sendercontactinput" placeholder="10 digits" class="form-control"/>
            </div>
            <h4><label class="radio-inline">
                <input type="radio" name="sendergenderinput"  value="M" checked> Male
                </label>
            
            <label class="radio-inline">
                <input type="radio" name="sendergenderinput"  value="F" />Female</label></h4>
            
                <br><br>
            <p>
            <input type="submit" class="btn btn-primary btn-lg"/>
            </p>
            </form>
        </div>
        <div id="item" class="tab-pane fade">
            <b><h2>Enter Item details</h2></b>
            <br>
            <form action="save_item.php" method="post">
            
            <div class="form-group">
            <h4><label for="senderid"> Sender Id :</label></h4>
                <input type="number" name="senderidinput" class="form-control"/>
            </div>
            <div class="form-group">
            <h4><label for="type"> Type :</label></h4>
                <select class="form-control" name="typeinput">
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                 </select>   
            </div>
            <div class="form-group">
            <h4><label for="weight">Weight in gms :</label></h4>
                <input type="number" name="weightinput" class="form-control"/>
            </div>
            <div class="form-group">
            <h4><label for="d_address">Address :</label></h4>
                <input type="text" name="daddressinput" class="form-control"/>
            </div>
            <div class="form-group">
            <h4><label for="pincode"> Pincode :</label></h4>
                <input type="number" name="pincodeinput" class="form-control"/>
            </div>
            <div class="form-group">
            <h4><label for="i_date">Date :</label></h4>
                <input type="date" name="idateinput" class="form-control"/>
            </div>  
            <br><br>
            <p>
            <input type="submit" class="btn btn-primary btn-lg"/>
            </p>
            </form>
        </div>
        <div id="payment" class="tab-pane fade">
            <b><h2>Enter Payment details</h2></b>
            <br>
            <form action="save_payment.php" method="post">
            
            <div class="form-group">
            <h4><label for="itemno"> Item NO :</label></h4>
                <input type="number" name="itemnoinput" class="form-control"/>
            </div>
            <div class="form-group">
            <h4><label for="amount">Amount :</label></h4>
                <input type="number" name="amountinput" class="form-control"/>
            </div>
            <div class="form-group">
            <h4><label for="packfee"> Packing Fee :</label></h4>
                <select class="form-control" name="packfeeinput">
                    <option>0</option>
                    <option>10</option>
                    <option>20</option>
                    
                 </select>   
            </div><br>
            
            <br>
            <p>
            <input type="submit" class="btn btn-primary btn-lg"/>
            </p>
            </form>
        </div>
       </div>     
                
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>