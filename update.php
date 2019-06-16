<?php
include("connection.php");

try {
	
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	if(isset($_POST['user']))
{
	$userquantity = ($_POST['thequantity']);
    $dbquantity ="SELECT thequantity FROM products "
	$newQuantity= $dbquantity - $userquantity ;
    $sql = "UPDATE products SET quantity=\"$newQuantity\" WHERE id=\"$id\"";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute($sql);
	echo "<script> document.getElementById('s').innerHTML = $newQuantity </script>";
}

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>