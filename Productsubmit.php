<?php 
$host = "ec2-107-21-10-179.compute-1.amazonaws.com"; 
$db_name = "datp6s3j2j1ord";
$db_username = "qxgfwfurdxxrlz";
$db_password = "5c051cdbccefc677391cdd8f0ad28c042c2e1eada2eedbb46f2b586f4ef0ee8d";

$conn_string = "host =$host port = 5432 dbname = $db_name user = $db_username
password = $db_password";

if ($conn_string === false) { 
    die("ERROR: Could not connect to the database server!"); 
} else {
    $ID = $_POST['ID']; 
    $shop = $_POST['Shop']; 
    $name = $_POST['Name']; 
    $category = $_POST['Category']; 
    $amount = $_POST['Amount']; 
	$pg_conn = pg_connect($conn_string);
} 
//echo ("Connect successfully!"); 
$query = "INSERT INTO product (ID, shop, name, category, amount) VALUES ('$ID', '$shop', '$name', '$category', '$amount');"; 

$result = pg_query($pg_conn, $query); 
//echo ("Connect successfully!"); 
if ( $result ) {
        
        function function_alert($message) {
      
            // Display the alert box 
            echo "<script>alert('$message');</script>";
        }
        function_alert("Record Successfully Added!");
    }

