<?php
$servername="localhost";
$username= "root";
$password= "";
$dbname= "loginpage";

$conn=new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Failed to Connect". $conn->connect_error);
}

$email=$_POST['email'];
$password=$_POST['password'];


$sql="SELECT * FROM project WHERE email='$email' AND  password='$password' ";

$result = $conn->query($sql);

if($result->num_rows==1){
    $row=$result->fetch_assoc();
    session_start();
    $_SESSION['user_id']=$row['id'];
    $_SESSION['useername']=$row['email'];

    header("Location: dashboard.php");
}
else{
    echo "Invalid Username or Password";
}
$conn->close();
?>