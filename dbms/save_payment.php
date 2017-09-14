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
    $amount=$_POST['amountinput'];
    $packfee=$_POST['packfeeinput'];
   $sql =<<<EOF
      insert into payment(p_no,i_no,amount,pack_fee) values(nextval('p_no_inc'),$i_no,$amount,$packfee);
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret){
      echo pg_last_error($db);
      exit;
   } 
  else
     echo "Operation done successfully\n";
    header("get_courier.php");

   pg_close($db);
?>