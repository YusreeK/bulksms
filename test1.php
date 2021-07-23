<?php
//if(isset($_POST['submit'])){
   // $username = $_POST['username'];
   // $password = $_POST['password'];

$connection = mysqli_connect('localhost', 'root', 'wawasan','Soccer');

if($connection){
    echo"<br />";
    echo "connected";
    echo"<br />";
} else {

 die("Unable to Capture Data");
}

$query = "SELECT * From Competition";

$result = mysqli_query($connection, $query);

if(!$result){

  die('Failed' .  mysqli_error());
}


?>





<html>
<head>

<title>Read</title>

</head>
<body>


<?php

echo '<table border="1" width="50%">';
echo "<thead>";
    echo "<tr>";
        echo "<th>Competition</th>";
        echo "<th>Action</th>";
    echo "</tr>";
echo "</thead>";
echo "<tbody>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
        echo "<td>" . $row['CompName'] . "</td>";
        echo ' <td><a href="href.php?method=edit&id={theID}">Edit</a>  <a href="href.php?method=edit&id={theID}">Delete</a></td>';
        //echo "<td>";
            
            //echo ' <td><a href="href.php?method=edit&id={theID}">Edit</a>  <a href="href.php?method=edit&id={theID}">Delete</a></td>';
            //echo ' <td><a href="href.php?method=edit&id={theID}">Edit</a>  <a href="href.php?method=edit&id={theID}">Delete</a></td>';
        echo "</td>";
    echo "</tr>";
   // print_r($row);
}
echo "</tbody>";                            
echo "</table>";

?>

<?php
if(isset($_POST['submit'])){
$CompName = $_POST['CompName'];

if($connection){

    echo "";

} else {

   die("Unable to Capture Data");
}

$query = "INSERT INTO Competition (CompName) VALUE ('$CompName')";

$result = mysqli_query($connection, $query);

if(!$result){

   die('Failed' .  mysqli_error());
}

}
?>
<br><br>

<form method="post" action="test1.php"> 
Add competition <input type="text" name="CompName">
  <br><br>
<input type="submit" name="submit" value="Submit"> 
</form>

</body>
</html>