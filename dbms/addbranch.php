<?php
   $host        = "host=127.0.0.1";
   $port        = "port=5432";
   $dbname      = "dbname=courier_management";
   $credentials = "user=postgres password=nvn";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db){
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
    $b_no=$_POST['bnoinput'];
    $b_name=$_POST['bnameinput'];
    $city=$_POST['cityinput'];
    $pincode=$_POST['pincodeinput'];
    $cb=$_POST['cbinput'];
   $sql =<<<EOF
      insert into branch values($b_no,'$b_name','$city',$pincode,$cb);
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret){
      echo pg_last_error($db);
      exit;
   } 
  else
     echo "Operation done successfully\n";
    header("location:http://localhost:8080/dbms/home1.html");

   pg_close($db);
?>