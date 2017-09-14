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
    $i_no=$_POST['itemnoinput'];
    $sb_no=$_POST['sbinput'];
    $db=$_POST['dbinput'];
    $status=$_POST['statusinput'];
   $sql =<<<EOF
      insert into shipping values($i_no,$sb_no,);
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret){
      echo pg_last_error($db);
      exit;
   } 
  else
     echo "Operation done successfully\n";
    header("upcourier.php");

   pg_close($db);
?>