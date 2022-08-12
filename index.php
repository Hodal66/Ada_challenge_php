<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <form action="" method="POST">
        <div class="main">
            <div class="first-content">
                <h2>Create an Account</h2>
                <p class="personal_detail">Enter your parsonal details to create an account</p>
            </div>
            <div class="input_section">
                <div>
                    <label for="name">Your Name</label><br>
                    <input type="text" name="name" id="" class="name">
                </div>
                <div>
                    <label for="email">Your Email</label><br>
                    <input type="email" name="email" id="" class="email">
                </div>
                <div>
                    <label for="username">Username</label><br>
                    <input type="text" name="username" id="" class="username">
                </div>
                <div>
                    <label for="password">Your Password</label><br>
                    <input type="password" name="password" class="password">
                </div>
                <div class="checkbox-section">
                    <input type="checkbox" name="terms" id="terms">
                    <p>I agree and accept the
                        <a href="#">terms and conditions</a>
                    </p>
                </div>
                <div>
                    <input type="submit" value="Create Account" name="send_btn">
                </div>
                <div class="alread-have-account" id="ineza">
                    <p> Already have an account ? </p>
                    <a href="#" class="login_link"> Log in</a>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $submit = $_POST['send_btn'];
    if (!$name && !$password && !$email && !$username) {
        echo "Error All fields are required";
    }
?>
<div>

</div>
<table border=2>
    <tr>
        <th>Names</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
    </tr>
    <tr>
        <td><?php echo $name; ?></td>
        <td><?php echo $username ?></td>
        <td><?php echo $email ?></td>
        <td><?php echo $password  ?></td>
    </tr>
</table>
<?php
}
?>