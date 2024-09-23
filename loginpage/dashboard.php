<?php
if(!isset($_SESSION['user_id'])){
    header("Location: account.php");
}
?>

<html>
    <head>
        <title>Dashboard</title>
    </head>
    <body>
        <h1>
            Welcome <?php echo $_SESSION['username']; ?>
        </h1>
        <h2>Wellcome To  Dashboard</h2>
        <a href="logout.php">Logout</a>
    </body>
</html>