
<?php
include "connection.php";
if(isset($_POST['user']))
{
	$sql;
	try{ //we can replace try and catch by if($conn->query($sql)) and else
		//insert data
		$name = ($_POST['n']);
		$id = ($_POST['i']);
		$thequantity = ($_POST['q']);
		$pid =($_POST['p']);
		$sql = "insert customer values('$name','$id','$thequantity','$pid') ";
		//echo $sql;
		$conn->query($sql);
        
        
	}
    catch(PDOException $e){
		//use to give me the exactly error 
		echo $sql . "<br>" . $e->getMessage();
	}
	
	$conn = null;
	
}

?>
<html>
    <head>
		<link rel="stylesheet" href="css/back.css">
		<title>TheGreenShop</title>
	</head>
    <body>
    <a href="The-Green-Shop.php"><input type="button" value="back to home" onclick="check()"/></a>
</html>