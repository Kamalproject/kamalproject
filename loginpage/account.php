<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>
    <h2>Welcome to Login Page</h2>
    <div id="account">
        <form action="login_process.php" method="post">
            <label for="email">Username</label>
            <input type="email" name="email" required><br><br>
            <label for="password">Password</label>
            <input type="password" name="password" required><br><br>

            <input type="submit" id="submit" value="Login">
        </form>
    </div>
</body>
</html>