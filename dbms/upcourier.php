<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-eqiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap/Nicon.ico" rel="icon">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Ding Dong</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link href="navbar-top.css" rel="stylesheet">
</head>
<body>
<a href="back.php"><b><h1><center>Ding Dong Couriers</center></h1></b></a><hr>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#received"><h4>Received Items</h4></a></li>
        <li><a data-toggle="tab" href="#shipped"><h4>Shipped Items</h4></a></li>
    </ul>
    <div class="tab-content">
        
        <div id="received" class="tab-pane fade in active">
            
            <b><h2>Enter Received Items</h2></b>
            <br>
            <form action="save_received.php" method="post">
            <div class="form-group">
            <h4><label for="itemno"> Item No :</label></h4>
                <input type="number" name="itemnoinput" placeholder="3000" class="form-control"/>
            </div>
            <div class="form-group">
            <h4><label for="sbno"> Source Branch No :</label></h4>
                <input type="number" name="sbnoinput" placeholder="1000"  class="form-control"/>
            </div>
            <div class="form-group">
            <h4><label for="contact">Item Received Date :</label></h4>
                <input type="date" name="rdateinput" class="form-control"/>
            
            </div>
                <br><br>
            <p>
            <input type="submit"  value="Update" class="btn btn-primary btn-lg"/>
            </p>
            </form>
        </div>
        <div id="shipped" class="tab-pane fade">
            <b><h2>Enter Shipped Items</h2></b>
            <br>
            <form action="save_shipped.php" method="post">
            
            <div class="form-group">
            <h4><label for="itemno"> Item No :</label></h4>
                <input type="number" name="itemnoinput"  placeholder="3100" class="form-control"/>
            </div>
            
            <div class="form-group">
            <h4><label for="dbno">Destination Branch No:</label></h4>
                <input type="number" name="dbnoinput" placeholder="1000" class="form-control"/>
            </div>
            <div class="form-group">
            <h4><label for="sdate">Item Shipped Date :</label></h4>
                <input type="date" name="sdateinput" class="form-control"/>
            </div>  
            <br><br>
            <p>
            <input type="submit" value="Update" class="btn btn-primary btn-lg"/>
            </p>
            </form>
        </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>