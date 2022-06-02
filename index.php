<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Test Page</title>
    </head>
    <body>
        <div id="register-form" class="center">
            <form id="register" method="post" action="welcome.php">
                <h1>Register Account</h1>
                <input type="text" name="username" placeholder="username"><br>
                <input type="password" name="password" placeholder="password"><br>
                <input type="submit" value="Register" class="button">
            </form>
        </div>

        <div id="login-form" class="center">
            <form id="login" method="post" action="login.php">
                <h1>Login</h1>
                <input type="text" name="login_username" placeholder="username"><br>
                <input type="password" name="login_password" placeholder="password"><br>
                <input type="submit" value="Login" class="button">
            </form>
        </div>
    </body>
</html>

<?php
