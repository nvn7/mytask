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

    
    $s_name=$_POST['sendernameinput'];
    $address=$_POST['senderaddressinput'];
    $contact=$_POST['sendercontactinput'];
    $gender=$_POST['sendergenderinput'];
   $sql1 =<<<EOF
      insert into sender values(nextval('s_id_inc'),'$s_name','$address',$contact,'$gender');
EOF;
    $sql2 =<<<EOF
      select * from sender order by s_id desc limit 1;
EOF;

   
   $ret = pg_query($db, $sql1);
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
    echo "  "."$data[0]"."   "."$data[1]";
  
   pg_close($db);
?>