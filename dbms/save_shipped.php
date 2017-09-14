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
    $db_no=$_POST['dbnoinput'];
    $sdate=$_POST['sdateinput'];
   $sql =<<<EOF
      insert into shipped_to values($i_no,$db_no,'$sdate');
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