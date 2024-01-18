<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graphiculture</title>
    <link rel="stylesheet" href="graphiculture.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script></head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" ></script>
<body>
    <div class="container">
        <div class="row">            
                    <div class="col-lg-12 d-flex justify-content-center align-items-center mt-5">
                        <div class="register bg-dark">
                            <div class="text-center h4 mt-3 text-white">REGISTER</div>
                            <form method="POST">

                                <div class="row mt-4 ms-5 reg-row">
                                    <div class="col-12">
                                        <input class="form-control stu-id" type="text" name="stu-id" placeholder="Enter Student ID" aria-label="default input example">
                                    </div>

                                    <div class="col-12">
                                        <input class="form-control stu-id" type="text" name="stu-id2" placeholder="Enter Student ID" aria-label="default input example">
                                    </div>
                
                                    <div class="col-12 mt-4">
                                        <input class="btn btn-success" type="submit" value="Register">
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {

        
        $student_one=$_POST['stu-id'];
        $student_two=$_POST['stu-id2'];
        $servername = "db-main.czqededjccqk.ap-south-1.rds.amazonaws.com";
        $username = "admin";
        $password = "rootroot"; 
        $dbname = "db_sub";    
        
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        $query="select * from students where student_id='$student_one'";
        $query_run=mysqli_query($conn,$query);

        $query_two="select * from students where student_id='$student_two'";
        $query_run_two=mysqli_query($conn,$query_two);
        

        $query_already="select * from graphiculture where studentone='$student_one'";
        $check_query_run=mysqli_query($conn,$query_already);
        if(mysqli_fetch_row($check_query_run)>0){
            echo "<script>
            swal({
                title: 'Warning',
                text: 'Student One Have already registered in this event',
                icon: 'warning'
            });
        </script>";
        exit;
        }

        if($student_one!="NA"){
            $user_check="select * from students where student_id='$student_one'";
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
    if($student_one!="NA"){
        $query="select * from graphiculture where studenttwo='$student_one'";
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
    }

        $query_two="select * from graphiculture where studenttwo='$student_two'";
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

        $query_three="select * from graphiculture where studentone='$student_two'";
        $query_three_run=mysqli_query($conn,$query_three);
        if(mysqli_fetch_row($query_three_run)>0){
            echo "<script>
            swal({
                title: 'Warning',
                text: 'Co-Participant had already Registered in this Event',
                icon: 'warning'
            });
        </script>";
        exit;
        }
        if ($student_one == "NA") {
            echo "Come inside" . '<br>';
            $student_id_one = "NA";
            $studentone = "NA";
            $rollnoone = "NA";
            $streamone = "NA";      
            $phonenumberone = "NA";
        }
        
        if ($student_one != "NA" && $student_one != "na" && $student_one != "Na") {
            echo "Come inside1" . '<br>';
            $query_run_one_check = "select * from students where student_id='$student_one'";
            $run_one_check = mysqli_query($conn, $query_run_one_check);
        
            while ($student_one_fetch = mysqli_fetch_assoc($run_one_check)) {
                $student_id_one = $student_one_fetch['student_id'];
                $studentone = $student_one_fetch['studentName'];
                $rollnoone = $student_one_fetch['rollNumber'];
                $streamone = $student_one_fetch['stream'];
                $phonenumberone = $student_one_fetch['contactNumber'];
            }
        }
        
        
        if ($student_two == "NA") {
            echo "come inside4".'<br>';
            $student_id_two = "NA";
            $studenttwo = "NA";
            $rollnotwo = "NA";
            $streamtwo = "NA";      
            $phonenumbertwo = "NA";
        }
        
        // Corrected condition using &&
        if ($student_two != "NA" || $student_two != "na" || $student_two != "Na") {
            echo "come inside 2";
            $query_run_check = "select * from students where student_id='$student_two'";
            $run_check = mysqli_query($conn, $query_run_check);
        
            while ($student_two_fetch = mysqli_fetch_assoc($run_check)) {
                $student_id_two = $student_two_fetch['student_id'];
                $studenttwo = $student_two_fetch['studentName'];
                $rollnotwo = $student_two_fetch['rollNumber'];
                $streamtwo = $student_two_fetch['stream'];
                $phonenumbertwo = $student_two_fetch['contactNumber'];
                echo $student_id_two;
                echo $studenttwo;
            }
        }
        
        while($row = mysqli_fetch_assoc($query_run)){
            $insert_check="insert into graphiculture values('$student_one_check','$student_id_two');";
            $insert_run=mysqli_query($conn,$insert_check);
            if($insert_run){
                echo "<script>alert('inserted')</script>";
            }
            $ch = curl_init('https://script.google.com/macros/s/AKfycbyLnv67zaROwrHbisKyp9sh_lvrNJDEpIaHJd7rKoFUDHqStwC4QNayTCqos7TQ2o3F/exec');
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
                'studentone' => $student_id_one,
                'rollno' => $rollnoone,
                'stream'=> $streamone,
                'phonenumber'=>$phonenumberone,
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
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>