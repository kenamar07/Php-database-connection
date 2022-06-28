<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn = mysqli_connect($server, $username, $password, $database);

if(isset($_POST['submitButton']))
{
    //1. fetch from data
    $fullName = $_POST['fullName'];
    $phone = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    //2. Submit from data
    $insertData = mysqli_query($conn, "INSERT INTO registernow(fullname, phoneNumber, email, gender, course) VALUES('$fullName', '$phone', '$email', '$gender', '$course')");

    if($insertData)
    {
        echo "Data Submitted Successfully";
    }
    else{
        echo "Error Occurred";
    }
}
?>