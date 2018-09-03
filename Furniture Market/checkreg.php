<?php

require 'config.php';

echo "hello";
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['psw'];
$contact=$_POST['contact'];
$address=$_POST['address'];

//insertion
$statement="insert into customer (Password, Name, Address, Contact, Email) values ('$password', '$name', '$address', '$contact', '$email')";

//check existance
$statementsearch="select * from customer where Email = '$email'";
$searchresult = mysqli_query($conn, $statementsearch);

if (mysqli_num_rows($searchresult) > 0) 
{
    echo "This Email Already Exists!";
}

else
{
        if(mysqli_query($conn,$statement))
    {
        header('location:registration.php');
    }
    else
        mysqli_error($conn);

    mysqli_close($conn);
}