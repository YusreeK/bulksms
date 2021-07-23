<?php
include("fms.php");


//Checking same items, same ID

//$query = "SELECT 'SessionID,' 'ProductID', 'Quantity' FROM SHOPPING_CART WHERE SessionID = '$sID' AND ProductID = 'prodID'";
//$result = $mysqli->query($query, MYSQLI_STORE_RESULT);
//if(!$result){
//    echo($mysqli->error);
//    exit();
//}

// The Item has already existed?
if  ($result->num_rows == 1){
    $query = "UPDATE Competition SET Quantity = '$qty' WHERE SessionID = '$sID' AND ProductID = '$prodID'"; 
}
else{
    $query = "INSERT INTO Competition (comp_name) VALUES '$comp_name'";
}

echo "The Cart has been Updated<br  />";
include("test.php");
?>