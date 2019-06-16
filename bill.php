<link rel="stylesheet" href="css/TheGreenShop.css">
<title>The Bill</title>
<?php
$conn = mysqli_connect ("localhost" , "root" , "", "thegreenshop");
?>

<?php


	function bill($sql){
		include "connection.php";
		$stmt = $conn->query($sql);
		echo '<table border="1"> <tr> <th>Name</th> <th>ID</th> <th>Quantity</th> <th>Product ID</th></tr>';
		while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
			echo "<tr><td>";
			echo($row['name']);
			echo("</td><td>");
			echo($row['id']);
			echo("</td><td>");
			echo($row['thequantity']);
			echo("</td><td>");
			echo($row['pid']);
			echo("</td></tr>\n");
		}
		echo "</table>\n<br><br><br>";
	}
	echo "<h2> The Bill of Customers</h2>";
	$sql="select * from customer ";
	bill($sql);

?>