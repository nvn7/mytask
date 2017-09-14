<?php

    $username = $_POST['user'];
    $password = $_POST['pass'];
    $des=$_POST['designation'];
        
        if(($username=="naveen" || $username=="umapathi") && ($password=="nvn" || $password=="pathi") && $des=="Front Desk"){
             header("location:http://localhost:8080/dbms/front.htm");       
        }
        else if(($username=="kumar" || $username=="nvn") && ($password=="nvn" || $password=="pathi") && $des=="Back Desk"){
            header("location:http://localhost:8080/dbms/back.php");
        }
        else        
            header("location:http://localhost:8080/dbms/login.php"); 
            
    
?>