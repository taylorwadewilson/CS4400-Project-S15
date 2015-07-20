<?php 
$link = mysqli_connect('academic-mysql.cc.gatech.edu', 'cs4400_Group_1', 'password?????'); 
    if (!$link) { 
        die('Could not connect to MySQL: ' . mysql_error()); 
    }


$username = mysqli_real_escape_string($link, $_POST["username"]);
$password = mysqli_real_escape_string($link, $_POST["password"]);

$sql = "SELECT password FROM user WHERE username = '$username'";
$result = mysqli_query($link, $sql);

//var_dump($password);

$pass = $result->fetch_assoc()['password'];

//var_dump($pass);

if ($pass == $password) {
   header("Location:search.html");
}
    else{
    header("Location:Login2.html");
    // return to login 
}

mysqli_close($link); 
?>
