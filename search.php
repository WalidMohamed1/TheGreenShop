<?php
$conn = mysqli_connect ("localhost" , "root" , "", "thegreenshop");
?>

<?php
$output = '';
    if (isset($_POST['searchbutton'])) {
    $searching = $_POST['search'];
    $query = mysqli_query( $conn , "SELECT * FROM products WHERE name LIKE '%$searching%' ; " ) or die("Could not search.");
    $result = mysqli_num_rows($query);
    if($result == 0) {
        $output = 'No results found for <b>"' . $searching . '" <b>';
    } else {
        while($row = mysqli_fetch_array($query)) {
            $id = $row['id'];
            $name= $row['name'];
            $price = $row['price'];
            $quantity = $row['quantity'];
            $min_quantity = $row['min_quantity'];
            $output .= '<div style="font-size:40px">'.'product name:'.$name.'-'.' product id: '.$id.'-'.' product price:'.$price.'$'.'-'.' the quantity '.$quantity.'-'.' the min_quantity '.$min_quantity.'</div>';
           
  }
                        
                        
            }
            }
        else {
            header("location ./");
        }
print("$output");
?>

    

