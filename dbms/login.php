<!DOCTYPE html>
<html>
<head><title>Ding Dong Couriers</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <p>
        <center>
    <a href="home1.html"><h1 style="color:GREEN"><b>Ding Dong COURIERS</b></h1></a>
        </center>
    </p>
<div id="frm">
<form action="check_login.php" method="POST">
   <p> 
       <label for="type"> Designation :</label>
        <select class="form-control" name="designation">
                    <option>Front Desk</option>
                    <option>Back Desk</option>
                    
         </select>   
  </p>
<p>
  <label>Username :</label>
  <input type="text" value="" id="user" name="user" />
</p>
<p>
  <label>Password :</label>
  <input type="password" value="" id="pass" name="pass" />
</p>
<p>
  
  <input type="submit" id="but" value="Login" />
</p>

</form>
</div>
    <br><br><br><br><br>
<p style="text-align:right;font-family:TimesNewRoman;">&copy copyright: Umapathi & Team</p>
</body>

</html>
