
<!DOCTYPE html> 
<html lang="en">

<head>

    <meta charset="UTF-8"> 
    <meta name="viewport" content="width-device-width, initial-scale=1.0"> 
    <title>ATN Boss - View Shop Data</title>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="/css/style.css"> 
</head>

<body id="bd-view-page"> 
    <div class="form-title">
        <h1 style="font-weight: 700;">ATN BOSS - VIEW SHOP DATA </h1> 
    </div> 
    <div class="container"> 
        <div class="col" style="padding-top:58px;"> 
        <table id="view-data" class="table" width="100%" cellspacing="0"> 
            <head> 
                
<?php 

 $host = "ec2-107-21-10-179.compute-1.amazonaws.com"; 
$db_name = "datp6s3j2j1ord";
$db_username = "qxgfwfurdxxrlz";
$db_password = "5c051cdbccefc677391cdd8f0ad28c042c2e1eada2eedbb46f2b586f4ef0ee8d";

$conn_string = "host =$host port = 5432 dbname = $db_name user = $db_username
password = $db_password";
$dbconn = pg_connect($conn_string);

$query =" SELECT ID, shop, name, category, amount FROM product ;"; 
$result = pg_query($dbconn, $query);

    include("displayDBadmin.php");
    display_table($result);
	
    pg_close();
?>
               
            </head> 
            <body>
               
