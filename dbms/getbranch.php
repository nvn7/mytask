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
    <a href="home1.html"><h1><center><b>Ding Dong Couriers</b></center><h1></a><hr>
    <b><h3>Enter the Branch Details</h3></b>
            <br>
            <form action="addbranch.php" method="post">
            
            <div class="form-group">
            <h4><label for="branchno">
            Branch No :</label></h4>
                <input type="number" name="bnoinput" placeholder="1000" class="form-control"/>
            </div>
            <div class="form-group">
            <h4><label for="bno"> Branch Name :</label></h4>
                <input type="text" name="bnameinput" placeholder="Fast" class="form-control"/>
            </div>
           <h4> <p>  
             <label for="city"> City :</label>
              <input type="text" name="cityinput" placeholder="City" class="form-control"/>
            </p></h4>
            <div class="form-group">
            <h4><label for="pincode"> Pincode :</label></h4>
                <input type="number" name="pincodeinput" placeholder="600000"  class="form-control"/>
            </div>
                        
            <div class="form-group">
            <h4><label for="cb"> No.of.Courier Boys :</label></h4>
                <input type="number" name="cbinput" placeholder=""  class="form-control"/>
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