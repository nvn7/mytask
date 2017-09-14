<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-eqiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap/Nicon.ico" rel="icon">
<title>Ding Dong Couriers</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
    <a href="back.php"><h1><center><b>Ding Dong Couriers</b></center><h1></a><hr>
    <b><h3>Update Delivery Details...</h3></b>
            <br>
            <form action="save_updelivery.php" method="post">
            
            <div class="form-group">
            <h4><label for="itemno">
            Item No :</label></h4>
                <input type="number" name="itemnoinput" placeholder="3000" class="form-control"/>
            </div>
            <div class="form-group">
            <h4><label for="cbno"> 
            Courier Boy No :</label></h4>
                <input type="number" name="cbnoinput" placeholder="8100" class="form-control"/>
            </div>
           <h4> <p>  
             <label for="dstatus"> Delivery Status :</label>
             <select class="form-control" name="dstatusinput">
                    <option>Delivered</option>
                    <option>Returned</option>
             </select>   
            </p></h4><br>   
                <div class="form-group">
            <h4><label for="ddate"> Delivered Date :</label></h4>
                <input type="date" name="ddateinput" placeholder="Delivered Date"  class="form-control"/>
            </div>
                <br>
            <p>
            <input type="submit" value="Update" class="btn btn-primary btn-lg"/>
            </p>
            </form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>