<?php
include('con.php');
session_start();
 if(isset($_GET['logout'])){
    unset($_SESSION['studentName']);
    unset($_SESSION['userid']);
    unset($_SESSION['rollnum']);
    session_destroy();
    echo '<script>
        swal({
            title:"warning",
            text:"Logged Out",
        });
    </script>';
    header("Location: homepage.php");
    exit;
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mind Muse</title>
    <link rel="stylesheet" href="mindmuse.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" ></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script></head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script>
    $(document).ready(function(){
        $(".evt-descp").click(function(){
            $(".descp").slideToggle();
        });
        $(".r_r").click(function(){
            $(".r_r_desp").slideToggle();
        });
        $("#phonecall").click(function(){
            let screensz=window.innerWidth<=767;
            let number="9626855855"
            if(screensz){
                window.location.href="tel:"+number;
            }
            else{
                alert("The Mobile Number is: "+number);
            }
        });
    });
</script>
<body>
<nav class="navbar navbar-expand-lg bg-body-black">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">
            <img src="logo/logo.png" alt="Bootstrap" class="ms-3" width="30" height="30">
            <span class="psg">&nbsp&nbspPSG COLLEGE OF TECHNOLOGY</span>
        </a>
        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#abt_us_sec">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#sponsers_sec">SPONSORS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="events.php">EVENTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">SCHEDULE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">GALLERY</a>
                </li>
                <li>
                <?php
                    if(isset($_SESSION['userid'])){
                        echo '<span class="nav-link text-white">Hello, '.$_SESSION['studentName'].'('.$_SESSION['rollnum'].')'.'</span></li>';
                        echo '<a class=" btn btn-danger" href="homepage.php?logout">Log out</a>';
                    }
                    else{
                       echo '<a class="btn btn-success" href="login.php">Login In</a>';
                    }
                ?>
                </li>
        </div>
    </div>
</nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="h1 text-white text-center mt-5">Mind Muse</div>
            </div>
            <div class="col-lg-12 d-flex justify-content-center mt-5">
                <img src="photos/Event_Logos/mindmuse.png" alt="">
            </div>
            <div class="col-lg-12 d-flex justify-content-center align-items-center mt-5">
                <div class="full-container justify-content-center">
                    <div class="info-box">
                        <div class="click-section">
                            <div class="evt-descp h4 text-center text-white">EVENT DESCRIPTION</div>
                                <div class="descp" style="display:none;">
                                    Presenting a euphoria of your comfort - " Mind Muse" event of Infinity 2k24,<br><br>
                                    Why is the sky blue?<br><br>
                                    Are you someone who ponders on the "why " in everything that you see?<br><br>
                                    Mind Muse blends your GK with a harmony that flows, perfectly celebrating the
                                    popular tunes but challenging to hit on…<br><br>
                                    Double Trouble, Double Triumph!
                                    Hitting high notes and cracking song codes.
                                    Who's the music master?<br><br>
                                    The fun starts when you come as a duo to beat your brains out to make the
                                    wildest guesses and the last round makes it more captivating Where Music and
                                    Monologue Collide!<br><br>
                                    Brace up for the most entertaining event untold!!
                                </div>
                        </div>
                        <div class="click-section">
                            <div class="r_r h4 text-center text-white">RULES & REGULATIONS</div>
                                <div class="r_r_desp bg-white" style="display:none;">
                                    <b>DO's:</b><br><br>
                                    The players from every team will be tested on their general
                                    knowledge based quizzes.<br><br>
                                    Players can participate as two per team.<br><br>
                                    Players will move to the second round after completing the
                                    first round and should guess the song name from the middle
                                    lines as clues.<br><br>
                                    The Team with the maximum points will move to the final
                                    round.<br><br>
                                    Participants should give a minute of talk only based on the
                                    topic.<br><br>
                                    The team should compete quickly to become the winners<br><br>
                                    <b>DON'Ts:</b><br><br>
                                    Players shall not work beyond the given time limits.<br><br>
                                    Participants shouldn’t go halfway without completing the
                                    entire game. 
                                </div>
                        </div>
                    </div>
                
                    <div class="col-lg-12 d-flex justify-content-center align-items-center mt-5">
                        <div class="register bg-dark">
                            <div class="text-center h4 mt-3 text-white">REGISTER</div>
                            <form method="POST">
                            <div class="row mt-4 ms-5 reg-row">
                                <div class="col-12">
                                    <input class="form-control stu-id" type="text" name="stu-id" placeholder="Enter Student ID" aria-label="default input example">
                                </div>
            
                                <div class="col-12 mt-4">
                                    <input class="btn btn-success" type="submit" value="Register">
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>

                    <div class="col-lg-12 mt-5">
                <div class="contact">
                    <div class="row">

                        <div class="col-lg-12 mt-3">
                            <p class="text-white d-flex justify-content-center cont-quote">Reach out, we're just a click away</p>
                        </div>

                        <div class="col-6 bod-right">
                            <p class="text-white d-flex justify-content-center cont-quote1">SAMYUKTHA</p>
                            <p class="text-white d-flex justify-content-center cont-quote2">8056746046</p>
                        </div>

                        <div class="col-6">
                            <p class="text-white d-flex justify-content-center cont-quote1">LAKSHMI GAYATHRI</p>
                            <p class="text-white d-flex justify-content-center cont-quote2">8695330066</p>
                        </div>

                    </div>
                </div>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!isset($_SESSION['userid'])) {
        echo "<script>
            swal({
                title: 'Warning',
                text: 'Please Log in to Your Account First',
                icon: 'warning'
            });
        </script>";
    }

        else{
        $student_two=$_POST['stu-id'];
        $servername = "db-main.czqededjccqk.ap-south-1.rds.amazonaws.com";
        $username = "admin";
        $password = "rootroot"; 
        $dbname = "db_sub";    
        
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        $query="select * from students where student_id='".$_SESSION['userid']."'";
        $query_run=mysqli_query($conn,$query);

        $query_two="select * from students where student_id='$student_two'";
        $query_run_two=mysqli_query($conn,$query_two);
        

        $query_already="select * from mindmuse where studentone='".$_SESSION['userid']."'";
        $check_query_run=mysqli_query($conn,$query_already);
        if(mysqli_fetch_row($check_query_run)>0){
            echo "<script>
            swal({
                title: 'Warning',
                text: 'You Have already registered in this event',
                icon: 'warning'
            });
        </script>";
        exit;
        }
        
        if($student_two!="NA"){
        $user_check="select * from students where student_id='$student_two'";
        $user_check_run=mysqli_query($conn,$user_check);
        if(mysqli_num_rows($user_check_run)==0){
            echo "<script>
            swal({
                title: 'Error',
                text: 'The Entered Student-ID does not exists',
                icon: 'error'
            });
        </script>";
        exit;
        }
    }

        $query="select * from mindmuse where studenttwo='".$_SESSION['userid']."'";
        $check_query_run=mysqli_query($conn,$query);
        if(mysqli_fetch_row($check_query_run)>0){
            echo "<script>
            swal({
                title: 'Warning',
                text: 'You Have already registered in this event',
                icon: 'warning'
            });
        </script>";
        exit;
        }

        $query_two="select * from mindmuse where studenttwo='$student_two'";
        $query_two_run=mysqli_query($conn,$query_two);
        if(mysqli_fetch_row($query_two_run)>0){
            echo "<script>
            swal({
                title: 'Warning',
                text: 'Co-Participant had already Registered in this Event',
                icon: 'warning'
            });
        </script>";
        exit;
        }

        $query_two="select * from mindmuse where studentone='$student_two'";
        $query_two_run=mysqli_query($conn,$query_two);
        if(mysqli_fetch_row($query_two_run)>0){
            echo "<script>
            swal({
                title: 'Warning',
                text: 'Co-Participant had already Registered in this Event',
                icon: 'warning'
            });
        </script>";
        exit;
        }

        if($student_two=="NA"){
            $student_id_two="NA";
            $studenttwo="NA";
            $rollnotwo="NA";
            $streamtwo="NA";      
            $phonenumbertwo="NA";
        }
        if($student_two!="NA" || $student_two!="na" || $student_two!="Na"){
        $query_run_check="select * from students where student_id='$student_two'";
        $run_check=mysqli_query($conn,$query_run_check);
        while($student_two_fetch=mysqli_fetch_assoc($run_check)){
            $student_id_two=$student_two_fetch['student_id'];
            $studenttwo=$student_two_fetch['studentName'];
            $rollnotwo=$student_two_fetch['rollNumber'];
            $streamtwo=$student_two_fetch['stream'];
            $phonenumbertwo=$student_two_fetch['contactNumber'];
        }
    }
        while($row = mysqli_fetch_assoc($query_run)){
            $student_one_check = $row['student_id'];
            $insert_check="insert into mindmuse values('$student_one_check','$student_id_two');";
            $insert_run=mysqli_query($conn,$insert_check);
            $ch = curl_init('https://script.google.com/macros/s/AKfycbxapCxVB6bCvR0Fsl_R4f01Pysi-R2rOr72GXlG-KCgjHuxFkggDI1S2JUcrtXMF9MatQ/exec');
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
                'studentone' => $row['studentName'],
                'rollno' => $row['rollNumber'],
                'stream'=> $row['stream'],
                'phonenumber'=>$row['contactNumber'],
                'studenttwo' => $studenttwo,
                'rollnotwo' => $rollnotwo,
                'streamtwo' => $streamtwo,
                'phonenumbertwo' => $phonenumbertwo,
            ]));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);

            if($response="Success"){
                    echo "<script>
        swal({
            title: 'Success',
            text: 'Registration Successful',
            icon: 'success',
            buttons: {
                confirm: 'OK'
            },
            dangerMode: true,
        }).then((willClose) => {
            if (willClose) {
                window.location.href = 'events.php';
            }
        });
    </script>";

            }
        }
    }
}
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>