
<?php 
$servername = "sql211.infinityfree.com"; 
$username = "if0_37708960"; 
$password = "VeZGeMrLQ2VWsF"; 
$dbname = "if0_37708960_shop"; 

try { 
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch(PDOException $e) { 
    echo "Connection failed: " . $e->getMessage(); 
}
?>
