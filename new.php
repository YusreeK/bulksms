<?php
if(isset($_POST['submit'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $connection = mysqli_connect('localhost', 'root' ,'wawasan' ,'loginapp');
        if(connectio){
            echo "We are connected";
        } else{
            die ("Failed to connect");
        }
        $query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";

$result = mysqli_query($connection, $query);

if(!$result){

    die('Failed' .  mysqli_error());
}
}
?>
<html>
<head>

<title>Document</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<div class="col-sm-6"></div>
<form action="logintest.php" method="post">
<div class="form-group">
    <label for="username">Username</lable>
    <input type="text" name="username" class="form-control">
</div>
<div class="form-group">
<label for="username">Password</lable>
    <input type="password" name="password" class="form-control">
</div>
<input class="btn btn-primary" type="submit" name="submit" value="Submit">
</form>
</div>
</body>
</html>