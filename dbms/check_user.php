<?php

function isuser(){
    $username = $_POST['name'];
    $password = $_POST['pass'];
    
    $mysqli = new mysqli("localhost","root","kzf689","my_website");
    $result = $mysqli->query("SELECT * FROM users");
    while($row = $result->fetch_array()){
        if($row[2]==$username && $row[5]==$password){
            echo "Hai ".$row[1]."<br>";
            return true;
        }
    }
    return false;
}

if(isuser()){
    header("location:http://localhost:8080/My%20Website/myform.html");
}
else{
    header("location:http://localhost:8080/My%20Website/login.htm");
}

?>