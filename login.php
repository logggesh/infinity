<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <form method="post">
        <div class="container d-flex justify-content-center align-items-center" style="height:100vh">
            <div class="row">
                <div class="d-flex justify-content-center align-items-center tot-class" style="height:100vh">
                    <div class="back">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12">
                            <div class="nucleus">
                            <lottie-player src="https://lottie.host/542373ff-5b68-4030-9e18-ee0cb8d42c43/mv3LUn5SEt.json" background="##FFFFFF" speed="1" style="width: 25px; height: 25px" loop autoplay direction="1" mode="normal"></lottie-player>                            </div>
                            <div class="bulb">
                                <lottie-player src="https://lottie.host/ad5b6c3e-71c7-47d2-9be7-c5b3b277d591/kkz3OR7pET.json" background="##fff" speed="1" style="width: 150px; height: 150px" loop autoplay direction="1" mode="normal"></lottie-player>
                            </div>
                                <p class="login-txt">LOGIN</p>
                            </div>
                            <div class="mt-3 d-flex justify-content-center">
                                <input class="form-control input-box" type="text" name="email" placeholder="EMAIL-ID" aria-label="default input example">
                            </div>
                            <div class="col-lg-12 mt-5 d-flex justify-content-center">
                                <input class="form-control input-box" type="text" name="password" placeholder="PASSWORD" aria-label="default input example">
                            </div>
                            <div class="col-lg-12 d-flex justify-content-center mt-5">
                                <button class="login-button">Login</button>
                                
                            </div>
                            <div class="col-lg-12 d-flex justify-content-center mt-3">
                                <p class="text-white">Not Registered? <a href="" style="text-decoration:none;color:#66CAE7">Sign Up</a></p>
                            </div>
                        </div>     
                    </div>
                </div>
            </div>
        </div>
    </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "db-main.czqededjccqk.ap-south-1.rds.amazonaws.com";
    $username = "admin";
    $password = "rootroot"; 
    $dbname = "db_sub";    

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = $_POST['email'];
    $password_form = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM students WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && ($password_form ==$user['password'])) {
        echo "<script>swal({
            text:'Logged In',
            title:'Login Successfull',
            icon:'success',
            Buttons:{
                confirm:'Ok'
            },
            dangermode:true,
        }).then((willClose)=>{
            if(willClose){
                swal.close()

            }
        }
        )</script>";
    } else {
        echo "<script>swal({
            text:'Not Logged In',
            title:'Login Failed',
            icon:'success',
            Buttons:{
                confirm:'Ok'
            },
            dangermode:true,
        }).then((willClose)=>{
            if(willClose){
                swal.close()
            }
        }
        )</script>";
    }

    $stmt->close();
    $conn->close();
}
?>