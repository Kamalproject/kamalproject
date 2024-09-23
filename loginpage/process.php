<?php
$servername="localhost";
$username= "root";
$password= "";
$db_name= "loginpage";

$conn=new mysqli($servername,$username,$password,$db_name);

if($conn->connect_error){
    die("Failed to connect". $conn->connect_error);
}
$sql="INSERT INTO PROJECT(name,number,email,dob,username,password) values('".$_POST["name"]."' , '".$_POST["number"]."' ,'".$_POST["email"]."', '".$_POST["dob"]."', '".$_POST["username"]."', '".$_POST["password"]."')";

if($conn->query($sql)){
    echo "Successfully Login";
}
else{
    echo "Error". $sql. "<br>". $conn->error;
}

$conn->close();
?>