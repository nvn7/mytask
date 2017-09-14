<?php
   $host        = "host=127.0.0.1";
   $port        = "port=5432";
   $dbname      = "dbname=sample";
   $credentials = "user=postgres password=nvn";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db){
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }

   $sql =<<<EOF
      SELECT * from sender;
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret){
      echo pg_last_error($db);
      exit;
   } 
   while($row = pg_fetch_row($ret)){
       $sid=$row[0];
        $name=$row[1];
        $add=$row[2];
        $con=$row[3];
        $gen=$row[4];
       
      echo "s_id = ". $sid . "<br>";
      echo "Name = ". $name ."<br>";
      echo "ADDRESS = ". $add ."<br>";
       echo "contact = ". $con ."<br>";
      echo "gender=  ".$gen ."<br><br>";
   }
   echo "Operation done successfully\n";
   pg_close($db);
?>