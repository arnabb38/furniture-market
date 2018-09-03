<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="registration.css">
</head>

<body>

    <div>
        <form action="checkreg.php" method="post" name="uinfo">
            <div class="container">
                <div class="headings">
                    <h1>Register</h1>
                    <p>Please fill in this form to create an account.</p>
                </div>

                <hr>

                <label for="name"><b>Name</b></label><br>
                <input type="text" placeholder="Enter Name" name="name" required><br>
                
                <label for="address"><b>Address</b></label><br>
                <input type="text" placeholder="Enter Location" name="address" required><br>
                
                <label for="email"><b>Email</b></label><br>
                <input type="text" placeholder="Enter Email" name="email" required><br>
                
                <label for="contact"><b>Contact</b></label><br>
                <input type="text" placeholder="Enter Contact Number" name="contact" required><br>

                <label for="psw"><b>Password</b></label><br>
                <input type="password" placeholder="Enter Password" name="psw" required><br>

                <label for="psw-repeat"><b>Repeat Password</b></label><br>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>
                <hr>

                <p class="headings">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                <button type="submit" class="registerbtn">Register</button>
            </div>

            <div class="container signin">
                <p>Already have an account? <a href="login.php">Sign in</a>.</p>
            </div>
        </form>
    </div>



</body>

</html>