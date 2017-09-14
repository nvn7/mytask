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
    $cb_no=$_POST['cbnoinput'];
    $dstatus=$_POST['dstatusinput'];
    $ddate=$_POST['ddateinput'];
   $sql =<<<EOF
      insert into delivery values($i_no,$cb_no,'$dstatus','$ddate');
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret){
      echo pg_last_error($db);
      exit;
   } 
  else
     echo "Operation done successfully\n";
    header("updelivery.php");

   pg_close($db);
?>