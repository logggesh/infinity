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
    <title>Techno Fuzzle</title>
    <link rel="stylesheet" href="technofuzzle.css">
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
                <div class="h1 text-white text-center mt-5">Techno Fuzzle</div>
            </div>
            <div class="col-lg-12 d-flex justify-content-center mt-5">
                <img src="photos/Event_Logos/technofuzzle.png" alt="">
            </div>
            <div class="col-lg-12 d-flex justify-content-center align-items-center mt-5">
                <div class="full-container justify-content-center">
                    <div class="info-box">
                        <div class="click-section">
                            <div class="evt-descp h4 text-center text-white">EVENT DESCRIPTION</div>
                                <div class="descp" style="display:none;">
                                    Infinity 4.0 presents - 'Technofuzzle'<br><br>
                                    Hey Technocrats, rattle your dags. It's time to show your tech
                                    prowess!<br><br>
                                    A mind puzzling event crafted with the right blend of technical skills
                                    and agility.<br><br>
                                    "Topple into the ultimate Enigma tech fiesta!!"<br><br>
                                    Gear up to divulge the words technically concealed as partners!<br><br>
                                    Sharpen your eyes and spruce the puzzles to gain rewards - "don't let
                                    the pieces puzzle you "<br><br>
                                    Read between the lines and decode the crossword to pull up to the
                                    other side of the game!<br><br>
                                    "Beat the clock to show your tech wit"<br><br>
                                    Conquer the quiz and emerge as the ultimate technical Wizards.<br><br>
                                    Brace yourselves for an ultimate battle of brilliance..<br><br>
                                </div>
                        </div>
                        <div class="click-section">
                            <div class="r_r h4 text-center text-white">RULES & REGULATIONS</div>
                                <div class="r_r_desp bg-white" style="display:none;">
                                    <b>DO's:</b><br><br>
                                    First round involves connection based game and speculating
                                    technical word in the given time limit<br><br>
                                    Players can pair up into 2 as a team.<br><br>
                                    Players should complete the cross words in the second round as fast
                                    as they can.<br><br>
                                    Players should follow the conditions associated with event.<br><br>
                                    The first team to complete will be rewarded.<br><br>
                                    <b>DON'Ts:</b><br><br>
                                    Players should not deviate from the event without completing it.<br><br>
                                    Players should not disobey the rules.
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
                            <p class="text-white d-flex justify-content-center cont-quote1">OVIASHRI</p>
                            <p class="text-white d-flex justify-content-center cont-quote2">9095005717</p>
                        </div>

                        <div class="col-6">
                            <p class="text-white d-flex justify-content-center cont-quote1">ANUVARSHINI</p>
                            <p class="text-white d-flex justify-content-center cont-quote2">9629406377</p>
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
        

        $query_already="select * from technofuzzle where studentone='".$_SESSION['userid']."'";
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

        $query="select * from technofuzzle where studenttwo='".$_SESSION['userid']."'";
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

        $query_two="select * from technofuzzle where studenttwo='$student_two'";
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

        $query_two="select * from technofuzzle where studentone='$student_two'";
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
            $insert_check="insert into technofuzzle values('$student_one_check','$student_id_two');";
            $insert_run=mysqli_query($conn,$insert_check);
            $ch = curl_init('https://script.google.com/macros/s/AKfycbxRRo3fCtlfQIpdETaCT6xyQaCCeGWhnCu3p6uFTmYVm5yan4D3ZrxZYqseOFZ-eDfa/exec');
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