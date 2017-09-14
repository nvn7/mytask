<?php 
$username = $_GET["user"];
$password = $_GET["pass"];

//$password= stripcslashes($password);
//$username = mysqli_real_escape_string($username);
//$password = mysqli_real_escape_string($password);

mysql_connect("localhost","root","kzf689");
mysql_select_db("login");

$result= mysql_query("select * from users where username ='$username' and '$password'")
                            or die("Failed to query Database".mysql_error());
$row =mysql_fetch_array($result);

if($row['username']== $username && $row['password']==$password){
	echo "Login Success!! Welcome ".$row['username'];
}
else{
	echo "Failed to login";
}


?>