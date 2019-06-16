 <html>
	<head>
		<title>Add items</title>
		<link rel="stylesheet" href="css/add.css">
	</head>
	<body>
		<form method = "POST">
			Name:<input type = "text" name = "name"><br><br>
			id:<input type = "number" name = "id"><br><br>
			price:<input type = "number" name = "price"><br><br>
			quantity:<input type = "number" name = "quantity"><br><br>
			min_quantity:<input type = "number" name = "min_quantity"><br><br>
			<input type = "Submit" name = "insert" value = "Add"/>
		</form>
	</body>
</html>

<?php
include "connection.php";
if(isset($_POST['insert']))
{
	$sql;
	try{ //we can replace try and catch by if($conn->query($sql)) and else
		//insert data
		$name = ($_POST['name']);
		$id = ($_POST['id']);
		$price = ($_POST['price']);
		$quantity = ($_POST['quantity']);
		$min_quantity = ($_POST['min_quantity']);
		$sql = "insert products values('$name','$id','$price','$quantity','$min_quantity') ";
		$conn->query($sql); 
		echo "New product added successfully";
	}
	catch(PDOException $e){
		//use to give me the exactly error 
		echo $sql . "<br>" . $e->getMessage();
	}
	
	$conn = null;
}

?>