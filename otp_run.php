<?php
session_start();
$servername = "db-main.czqededjccqk.ap-south-1.rds.amazonaws.com";
$username = "admin";
$password = "rootroot";
$dbname="db_sub";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "connected";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentName = $_SESSION['studentName'];
    $rollNumber = $_SESSION['rollnumber'];
    $degree = $_SESSION['degree'];
    $stream = $_SESSION['stream'];
    $email = $_SESSION['email'];
    $contactNumber = $_SESSION['contact_num'];
    $password_form = $_SESSION['password'];
    $yearOfStudy = $_SESSION['yos'];
    $gender = $_SESSION['gender'];
    $stu_id_prod=$_POST['student_id'];
    $stmt = $conn->query("INSERT INTO students VALUES ('$stu_id_prod','$studentName', '$rollNumber', '$degree', '$stream', '$email', '$contactNumber', '$password_form', '$yearOfStudy', '$gender')");
    $msg = '<h1>Hello '.$studentName.'</h1><br><p>Your Student Id is: '.$stu_id_prod.'</p>';
    if ($stmt) {
        echo "<script>alert('record inserted')</script>";
}
}
$conn->close();
?>
