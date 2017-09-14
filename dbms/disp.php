<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-eqiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap/Nicon.ico" rel="icon">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Ding Dong Couriers</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
    <center><h1>Details</h1></center>
    <?php
    $ino = $_POST['ino'];

   $host        = "host=127.0.0.1";
   $port        = "port=5432";
   $dbname      = "dbname=courier_management";
   $credentials = "user=postgres password=nvn";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db){
      echo "Error : Unable to open database\n";
   } 
     $sql1 =<<<EOF
      select * from item_status($ino);
EOF;
    
   $ret1 = pg_query($db, $sql1);
   if(!$ret1){
      echo pg_last_error($db);
      exit;
   }
$data1 = pg_fetch_row($ret1);
echo "$data1[0]";
echo "<br><br>";
        
   $sql =<<<EOF
      SELECT * from item where i_no=$ino;
EOF;
    
   $ret = pg_query($db, $sql);
   if(!$ret){
      echo pg_last_error($db);
      exit;
   }
    
    echo '<table border=1px>';
        echo '<th>Item No</th><th>Name</th><th>Type</th><th>Weight</th><th>Address</th><th>Data</th>';
    while($data = pg_fetch_row($ret))
        {
            echo'<tr>';
                echo '<td>'.$data[0].'</td><td>'.$data[1].'</td><td>'.$data[2].'</td><td>'.$data[3].'</td><td>'.$data[4].'</td><td>'.$data[5].'</td>';
            echo'<tr>';
        }
        echo '</table>';
   
        
        
           
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
