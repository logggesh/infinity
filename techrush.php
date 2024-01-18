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
    <title>Tech Rush</title>
    <link rel="stylesheet" href="techrush.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
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
                <div class="h1 text-white text-center mt-5">TECH RUSH</div>
            </div>
            <div class="col-lg-12 d-flex justify-content-center mt-5">
                <img src="photos/Event_Logos/tech_rush.png" alt="">
            </div>
            <div class="col-lg-12 d-flex justify-content-center align-items-center mt-5">
                <div class="full-container justify-content-center">
                    <div class="info-box">
                        <div class="click-section">
                            <div class="evt-descp h4 text-center text-white">EVENT DESCRIPTION</div>
                                <div class="descp bg-dark text-white" style="display:none;">
                                    Infinity 2k24 presents “TECH RUSH”-the ultimate treasure-finding experience!<br><br>
                                    “Calling all the wanderers and puzzle solvers, it's time to put your analyzing skills
                                    to the test. Power up yourself to push start the adventure,<br><br>
                                    Hone your technical skills to discover the hidden treasure…
                                    Gather yourselves in teams of two. Every QR counts-with twists and turns that
                                    imparts you with energy while draining down.<br><br>
                                    Convene the pieces, master the pseudocode and unveil the output amidst all to
                                    conquer!!<br><br>
                                    Race hard to find your riches, mates!!
                                </div>
                        </div>
                        <div class="click-section">
                            <div class="r_r h4 text-center text-white">RULES & REGULATIONS</div>
                                <div class="r_r_desp bg-white" style="display:none;">
                                <b>DO 'S:</b><br><br>
● Players should scan the QR code and will find a line of code as a
clue in it in the allocated block.<br><br>
● Players should find the location of the next QR Code.<br><br>
● A player who finds all the clues in the QR codes should combine
their clues.<br><br>
● Then the first player who completes it has to go to the allocated
lab and execute it.<br><br>
● Team members: 4 members per team.<br><br>
<b>DONT 'S:</b><br><br>
● Players should not look for the clues in other blocks.<br><br>
● Players are instructed not to get into any labs except the<br><br>
allocated lab.<br><br>
● Players should not disobey the rules of the event.

                                </div>
                        </div>
                    </div>
                
                    <div class="col-lg-12 d-flex justify-content-center align-items-center mt-5">
                        <div class="register bg-dark">
                            <div class="text-center h4 mt-3 text-white">REGISTER</div>
                            <form method="POST">
                            <div class="row mt-4 ms-5 reg-row">
                                <div class="col-12">
                                    <input class="form-control stu-id" type="text" name="stu-id2" placeholder="Enter Student ID" aria-label="default input example">
                                </div>
                                <div class="col-12 mt-3">
                                    <input class="form-control stu-id" type="text" name="stu-id3" placeholder="Enter Student ID" aria-label="default input example">
                                </div>
                                <div class="col-12 mt-3">
                                    <input class="form-control stu-id" type="text" name="stu-id4" placeholder="Enter Student ID" aria-label="default input example">
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
                            <p class="text-white d-flex justify-content-center cont-quote1">HARINI</p>
                            <p class="text-white d-flex justify-content-center cont-quote2">9629809225</p>
                        </div>

                        <div class="col-6">
                            <p class="text-white d-flex justify-content-center cont-quote1">KRISHNA PRAKASH</p>
                            <p class="text-white d-flex justify-content-center cont-quote2">8148195202</p>
                        </div>

                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
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
        $student_two=$_POST['stu-id2'];
        $student_three=$_POST['stu-id3'];
        $student_four=$_POST['stu-id4'];

        $servername = "db-main.czqededjccqk.ap-south-1.rds.amazonaws.com";
        $username = "admin";
        $password = "rootroot"; 
        $dbname = "db_sub";    
        
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        $query="select * from students where student_id='".$_SESSION['userid']."'";
        $query_run=mysqli_query($conn,$query);

        $query_two="select * from students where student_id='$student_two'";
        $query_run_two=mysqli_query($conn,$query_two);

        $query_three="select * from students where student_id='$student_three'";
        $query_run_three=mysqli_query($conn,$query_three);

        $query_four="select * from students where student_id='$student_four'";
        $query_run_four=mysqli_query($conn,$query_four);
        
        //self check
        $query_already="select * from techrush where studentone='".$_SESSION['userid']."'";
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

           //2nd per check
           $query_two="select * from techrush where studenttwo='$student_two'";
           $check_query_two=mysqli_query($conn,$query_two);
           if(mysqli_fetch_row($check_query_two)>0){
               echo "<script>
               swal({
                   title: 'Warning',
                   text: 'Co-Parcipant(2nd Person) had already Registered',
                   icon: 'warning'
               });
           </script>";
           exit;
           }
   
   
           //3rd per check
           $query_three="select * from techrush where studentthree='$student_three'";
           $check_query_three=mysqli_query($conn,$query_three);
           if(mysqli_fetch_row($check_query_three)>0){
               echo "<script>
               swal({
                   title: 'Warning',
                   text: 'Co-Parcipant(3rd Person) had already Registered',
                   icon: 'warning'
               });
           </script>";
           exit;
           }
   
           //4th per check
           $query_four="select * from techrush where studentfour='$student_four'";
           $check_query_four=mysqli_query($conn,$query_four);
           if(mysqli_fetch_row($check_query_four)>0){
               echo "<script>
               swal({
                   title: 'Warning',
                   text: 'Co-Parcipant(4th Person) had already Registered',
                   icon: 'warning'
               });
           </script>";
           exit;
           }
        
        //not exists check2
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

    //not exists check3
    if($student_three!="NA"){
        $user_check="select * from students where student_id='$student_three'";
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

    //not exists check4
    if($student_four!="NA"){
        $user_check="select * from students where student_id='$student_four'";
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


        if($student_two=="NA"){
            $student_id_two="NA";
            $studenttwo="NA";
            $rollnotwo="NA";
            $streamtwo="NA";      
            $phonenumbertwo="NA";
        }
        if($student_three=="NA"){
            $student_id_three="NA";
            $studentthree="NA";
            $rollnothree="NA";
            $streamthree="NA";      
            $phonenumberthree="NA";
        }
        if($student_four=="NA"){
            $student_id_four="NA";
            $studentfour="NA";
            $rollnofour="NA";
            $streamfour="NA";      
            $phonenumberfour="NA";
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

    if($student_three!="NA" || $student_three!="na" || $student_three!="Na"){
        $query_run_check_three="select * from students where student_id='$student_three'";
        $run_check=mysqli_query($conn,$query_run_check_three);
        while($student_three_fetch=mysqli_fetch_assoc($run_check)){
            $student_id_three=$student_three_fetch['student_id'];
            $studentthree=$student_three_fetch['studentName'];
            $rollnothree=$student_three_fetch['rollNumber'];
            $streamthree=$student_three_fetch['stream'];
            $phonenumberthree=$student_three_fetch['contactNumber'];
        }
    }

    if($student_four!="NA" || $student_four!="na" || $student_four!="Na"){
        $query_run_check="select * from students where student_id='$student_four'";
        $run_check=mysqli_query($conn,$query_run_check);
        while($student_four_fetch=mysqli_fetch_assoc($run_check)){
            $student_id_four=$student_four_fetch['student_id'];
            $studentfour=$student_four_fetch['studentName'];
            $rollnofour=$student_four_fetch['rollNumber'];
            $streamfour=$student_four_fetch['stream'];
            $phonenumberfour=$student_four_fetch['contactNumber'];
        }
    }
        while($row = mysqli_fetch_assoc($query_run)){
            $student_one_check = $row['student_id'];
            $insert_check="insert into techrush values('$student_one_check','$student_id_two','$student_id_three','$student_id_four');";
            $insert_run=mysqli_query($conn,$insert_check);
            $ch = curl_init('https://script.google.com/macros/s/AKfycbyfyA6NsUHG553HzLpZmaMVdu-jws8UuVnMIrOt0MJ7mBJ22ADuuVhzmsYhfGaZDs8nAQ/exec');
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
                'studentthree' => $studentthree,
                'rollnothree' => $rollnothree,
                'streamthree' => $streamthree,
                'phonenumberthree' => $phonenumberthree,
                'studentfour' => $studentfour,
                'rollnofour' => $rollnofour,
                'streamfour' => $streamfour,
                'phonenumberfour' => $phonenumberfour,

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
        if($response!="Success"){
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>