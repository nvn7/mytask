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
    $s_id=$_POST['senderidinput'];
    $type=$_POST['typeinput'];
    $weight=$_POST['weightinput'];
    $daddress=$_POST['daddressinput'];
    $pincode=$_POST['pincodeinput'];
    $idate=$_POST['idateinput'];
   $sql =<<<EOF
      insert into item values(nextval('i_no_inc'),$s_id,'$type',$weight,'$daddress',$pincode,'$idate');
EOF;
     $sql2 =<<<EOF
      select * from item order by i_no desc limit 1;
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret){
      echo pg_last_error($db);
      exit;
   } 
$ret2 = pg_query($db, $sql2);
   if(!$ret2){
      echo pg_last_error($db);
      exit;
   }
    $data = pg_fetch_row($ret2);
    echo "  "."$data[0]";
  

   pg_close($db);
?>