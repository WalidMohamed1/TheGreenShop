<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=thegreenshop",'root','');
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected successfully<br>"; 
}	
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
?>