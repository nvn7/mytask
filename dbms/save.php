<?php

$mysqli = new mysqli("localhost","root","kzf689","my_website");
if(!$mysqli){
    echo "Connection Failed<br>".mysql_error();
}


$ppass = $_POST['ppass'];
$cpass = $_POST['cpass'];

if($ppass==$cpass){
    $name = $_POST['name'];
    $uname = $_POST['uname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    
    $query = $mysqli->query("INSERT INTO users (name,username,dob,email,password) VALUES ('$name','$uname','$dob','$email','$ppass')");
    if($query){
           echo "<br>Signed In Successfully<br>";}
}
else{
    echo "Mis-match Password !!! Sign up Again<br>";
}


?>