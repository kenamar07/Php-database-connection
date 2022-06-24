<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn = mysqli_connect($server, $username, $password, $database);

if(isset($_POST['submitButton']))
{
    //1. fetch from data
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phonenumber'];
    $message = $_POST['message'];
    //2. Submit from data
    $insertData = mysqli_query($conn, "INSERT INTO registernow(firstname, lastname, email, phonenumber, message) VALUES('$firstName', '$lastName', '$email', '$phone', '$message')");

    if($insertData)
    {
        echo "Data Submitted Successfully";
    }
    else{
        echo "Error Occurred";
    }
}
?>