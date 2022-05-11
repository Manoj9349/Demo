<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register</title>
</head>
<body>
<main>
    <form action="register.php" method="post">
        <h1>Sign Up</h1>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" isrequired>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" isrequired>
        </div>
        <div>
            <label for="password_1">Password:</label>
            <input type="password" name="password_1" id="password_1" isrequired>
        </div>
        <!-- <div>
            <label for="password_2">Password Again:</label>
            <input type="password" name="password_2" id="password_2" isrequired>
        </div> -->
        <div>
            <label for="agree">
                <input type="checkbox" name="agree" id="agree" value="yes"/> I agree
                with the
                <a href="#" title="term of services">term of services</a>
            </label>
        </div>
        <button type="submit" name="reg_user" >Register</button>
        <footer>Already a member? <a href="login.php">Login here</a></footer>
    </form>
</main>
</body>
</html>