<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <form action="#" method="post">
        <label for="studentName">Student Name:</label>
        <input type="text" id="studentName" name="studentName" required>

        <label for="fullName">Full Name:</label>
        <input type="text" id="fullName" name="fullName" required>

        <label for="rollNumber">Roll Number:</label>
        <input type="text" id="rollNumber" name="rollNumber" required>

        <label for="degree">Degree:</label>
        <select id="degree" name="degree" required>
            <option value="BE">BE</option>
            <option value="BE Sandwich">BE Sandwich</option>
            <option value="B Tech">B Tech</option>
            <option value="BSc">BSc</option>
            <option value="ME">ME</option>
            <option value="MCA">MCA</option>
            <option value="M Tech">M Tech</option>
            <option value="MSc">MSc</option>
        </select>

        <label for="stream">Stream:</label>
        <select id="stream" name="stream" required>
            <option value="Applied Mathematics">Applied Mathematics</option>
            <option value="Applied Science">Applied Science</option>
            <option value="Automobile Engineering">Automobile Engineering</option>
            <option value="Biomedical Engineering">Biomedical Engineering</option>
            <option value="Bio Technology">Bio Technology</option>
            <option value="Civil Engineering">Civil Engineering</option>
            <option value="Computer Science and Engineering (AI/ML)">Computer Science and Engineering (AI/ML)</option>
            <option value="Computer Science and Engineering">Computer Science and Engineering</option>
            <option value="Computer Systems and Design">Computer Systems and Design</option>
            <option value="Cyber Security">Cyber Security</option>
            <option value="Data Science">Data Science</option>
            <option value="Electrical and Communication Engineering">Electrical and Communication Engineering</option>
            <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
            <option value="Fashion Design & Merchandising">Fashion Design & Merchandising</option>
            <option value="Fashion Technology">Fashion Technology</option>
            <option value="Information Technology">Information Technology</option>
            <option value="Instrumentation and Control Systems Engineering">Instrumentation and Control Systems Engineering</option>
            <option value="Master of Computer Applications">Master of Computer Applications</option>
            <option value="Mechanical Engineering">Mechanical Engineering</option>
            <option value="Metallurgical Engineering">Metallurgical Engineering</option>
            <option value="Production Engineering">Production Engineering</option>
            <option value="Robotics and Automation Engineering">Robotics and Automation Engineering</option>
            <option value="Software Systems">Software Systems</option>
            <option value="Textile Technology">Textile Technology</option>
            <option value="Theoretical Computer Science">Theoretical Computer Science</option>
        </select>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>

        <label for="verifyOTP">VERIFY OTP:</label>
        <input type="text" id="verifyOTP" name="verifyOTP" required>

        <label for="contactNumber">Contact Number:</label>
        <input type="tel" id="contactNumber" name="contactNumber" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>

        <label for="yearOfStudy">Year of Study:</label>
        <input type="text" id="yearOfStudy" name="yearOfStudy" required>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

        <button type="submit">Register</button>
    </form>
<?php
include('con.php');
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST['studentName'];
    $fullname=$_POST['fullName'];
    $rollno=$_POST['rollNumber'];
    $degree=$_POST['degree'];
    $stream=$_POST['stream'];
    $email=$_POST['email'];
    $contact=$_POST['contactNumber'];
    $password=$_POST['password'];
    $year_of_study=$_POST['yearOfStudy'];
    $gender=$_POST['gender'];
    $id_select="select * from students order by user id desc limit 1";
    $id_run=mysqli_query($con,$id_select);
    while($row=mysqli_fetch_assoc($id_run)){
        $user_id=$row['id'];
    }
    $user_id=$user_id+1;
    $query="insert into students values('$ser_id','$name','$fullname','$rollno','$degree','$stream','$email','$contact','$password','$year_of_study','$gender')";
    $insert_run=mysqli_query($con,$query);
    if($insert_run){
        echo "<script>alert('data  inserted')";
    }
}
?>
</body>
</html>