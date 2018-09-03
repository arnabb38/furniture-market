<?php
session_start();
?>

<?php

require 'config.php';


$email=$_POST['un'];
$password=$_POST['pw'];


$statementsearch="select * from customer where Email = '$email' and Password = '$password' ";

$searchresult = mysqli_query($conn, $statementsearch);

if (mysqli_num_rows($searchresult) > 0) 
{
    $_SESSION['un']= $name;
    header("location:registration.php");
	$flag=1;
	//break;
}

else
{
    $flag=2;
    //header("location:login.php");
    //echo "<div><h3>Invalid Email or Password</h3></div>   "
    echo "Invalid Name and Password!";

}
