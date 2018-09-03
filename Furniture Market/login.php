<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <div class="wholecontainer">
        <div class="headings">
            <h2>Login Form</h2>
        </div>
        <form name="login" action="validuser.php" method="post">
            
            <div class="imgcontainer">
                <img src="img_avatar2.png" alt="Avatar" class="avatar">
            </div>


            <div class="container">
                <label for="un"><b>Username</b></label>
                <input type="text" placeholder="Enter Email" name="un" required><br><br>

                <label for="pw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pw" required><br><br>

                <button type="submit">Login</button>
    
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>



</body>

</html>

<?php

    $flag=0;
    //$_SESSION['flag1']= 0;

    if(isset($_SESSION['flag1']))
    {
        echo "You're Logged Out!";
        session_destroy();
    }
    else
    {
        echo "";
    }

?>
