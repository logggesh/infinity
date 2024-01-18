<?php
  session_start();
  $trigger=0;
  $check=0;
  $studentName="";
  $email="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Onspot Form</title>
  <link rel="stylesheet" href="onspot_form.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
  <script src="https://smtpjs.com/v3/smtp.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" ></script>
</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height:100vh">
      <div class="row d-flex justify-content-center align-items-center" style="height:100vh">
        <div class="col-lg-4 col-md-12 left-container d-flex justify-content-center align-items-center p-0">
          <div class="infinity-logo-side d-flex justify-content-center align-items-center">
            <img src="photos/logo/infinity_logo.png" height="300px" width="300px" alt="">
          </div>
        </div>
        <div class="col-lg-8 col-md-12 right-holder d-flex justify-content-center align-items-center p-0">
          <div class="right-container">
            <div class="row">
              <div class="col-lg-12 h4 text-center  mt-5"><span class="regis-txt">REGISTRATION</span></div>
            
              <div class="col-lg-6  d-flex justify-content-center mt-4">
              <form method="POST">
                <div class="name-input">
                  <input type="text" id="studentName" class="name-in" name="studentName" required>
                  <label class="name-lbl">Student Name</label>
                </div>
              </div>


              <div class="col-lg-6 d-flex justify-content-center mt-4">
                <div class="name-input">
                  <input type="text" id="rollNumber" class="name-in" name="rollNumber" required>
                  <label class="name-lbl">Roll Number</label>
                </div>
              </div>

              <div class="col-lg-6 d-flex justify-content-center mt-5">
                <div class="name-input">
                  <input type="email" id="email" class="name-in" name="email" required>
                  <label class="name-lbl">Email Address</label>
                </div>
              </div>

              <div class="col-lg-6 d-flex justify-content-center mt-5">
                <div class="name-input">
                  <input type="tel" id="contactNumber" class="name-in" name="contactNumber" required>
                  <label class="name-lbl">Contact Number</label>
                </div>
              </div>
              

              <div class="col-lg-6 d-flex justify-content-center mt-5">
                <div class="name-input">
                <select id="yearOfStudy" name="yearOfStudy" class="option-in" required>
                    <option value="yos">Year Of Study</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
              </div>

              <div class="col-lg-6 mt-5 d-flex justify-content-center">
                <div class="name-input">
                  <select id="stream" class="option-in" name="stream" required>
                    <option value="stream">Stream</option>
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
                </div>
              </div>

              <div class="col-lg-12 mt-5 d-flex justify-content-center">
                <button class="submit-btn" type="submit">Register</button>
              </div>
</form>
            </div>
          </div>
        </div>
      </div>
    </div>  
</body>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $studentName = $_POST['studentName'];
    $rollNumber = $_POST['rollNumber'];
    $stream = $_POST['stream'];
    $email = $_POST['email'];
    $contactNumber = $_POST['contactNumber'];
    $yearOfStudy = $_POST['yearOfStudy'];
    
    $servername = "db-main.czqededjccqk.ap-south-1.rds.amazonaws.com";
    $username = "admin";
    $password = "rootroot";
    $dbname = "db_sub";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
      echo "<script>
      swal({
        text:'Connection Error Occured',
        title:'Connection Failed',
        icon:'Error',
        buttons:{
          confirm:'Ok'
        },
        dangerMode:true,
      }).then((willClose)=>{
        if(willClose){
            swal.close();
        }
      });
      </script>";
    }

    $roll_no_length=6;
    $roll_length=strlen($rollNumber);

    if($roll_no_length!=$roll_length){
      echo "<script>
          swal({
            text:'Enter a Valid Roll Number',
            title:'Roll Number',
            icon:'error',
            buttons:{
              confirm:'Ok'
            },
            dangerMode:true,
          }).then((willClose)=>{
            if(willClose){
              swal.close(); 
            }
          });
  </script>";
      $check++;
    }

    $mobile_num_len=strlen($contactNumber);

    if (!preg_match('/^[0-9]+$/', $contactNumber) && $mobile_num_len>10 ) {
      echo "<script>
          swal({
            text:'Enter a valid mobile number.',
            title:'error',
            icon:'error',
            buttons:{
              confirm:'Ok'
            },
            dangerMode:true,
          }).then((willClose)=>{
            if(willClose){
              swal.close();
            }
          });
  </script>";
      $check++;
  }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "<script>
          swal({
            text:'Invalid email address format.',
            title:'error',
            icon:'error',
            buttons:{
              confirm:'Ok'
            },
            dangerMode:true,
          }).then((willClose)=>{
            if(willClose){
              swal.close(); 
            }
          });
  </script>";
      $check++;
  }

  $query="select email from students where email='$email'";
  $query_run=mysqli_query($conn,$query);
  if(mysqli_fetch_row($query_run)>1){
    echo "<script>
          swal({
            text:'Email ID already Exists',
            title:'ERROR',
            icon:'error',
            buttons:{
              confirm:'Ok'
            },
            dangerMode:true,
          }).then((willClose)=>{
            if(willClose){
              swal.close(); 
            }
          });
    </script>";
      $check++;
  }


    if($yearOfStudy=="yos"){
      echo "<script>
          swal({
            text:'Select Year Of Study',
            title:'ERROR',
            icon:'error',
            buttons:{
              confirm:'Ok'
            },
            dangerMode:true,
          }).then((willClose)=>{
            if(willClose){
              swal.close(); 
            }
          });
    </script>";
      $check++;
    }

    if($stream=="stream"){
      echo "<script>
          swal({
            text:'Select Stream',
            title:'ERROR',
            icon:'error',
            buttons:{
              confirm:'Ok'
            },
            dangerMode:true,
          }).then((willClose)=>{
            if(willClose){
              swal.close(); 
            }
          });
    </script>";
    $check++;
    }
    if($check==0){
      $student_id_gen=rand(10,90);
      $student_id_fin=$rollNumber.'_'.$student_id_gen;
      echo $student_id_fin;
      $trigger=1;
      $query="insert into students values('$student_id_fin','$studentName','$rollNumber','$stream','$email','$contactNumber','null','$yearOfStudy');";
      $query_run=mysqli_query($conn,$query);
      echo $query_run;
      if($query_run){
        echo '<script>alert("data inserted")</script>';
      }
    }

  }
  ?>
<script>
  var trigger_fetch=<?php echo json_encode($trigger);?>;
  var student_name=<?php echo json_encode($studentName);?>;
  var student_id_fetch=<?php echo json_encode($student_id_fin);?>;
  var email_fetch=<?php echo json_encode($email)?>

  function run() {
    let msg = `<h1>Hello ${student_name}</h1><br><p>Your Student ID is:${student_id_fetch}`;
    
    Email.send({
      Host: "smtp.elasticemail.com",
      Username: "infinity2k24psgtech@gmail.com",
      Password: "1158C7EAE702F976E5D954AA2F464E912750",
      To: `${email_fetch}`,
      From: "infinity2k24psgtech@gmail.com",
      Subject: "Student ID",
      Body: `${msg}`
    }).then(
      function (message) {
        if (message === "OK") {
          swal({
            text: 'Student ID Sent Successfully ' + `${student_id_fetch}`,
            title: 'Success',
            icon: 'success',
            buttons: {
              confirm: 'Ok'
            },
            dangerMode: true,
          }).then(function () {
            window.location.href = "onspot_events.php";
          });
        } else {
          swal({
            text: 'Student ID Not Sent. An Error occurred',
            title: 'Error',
            icon: 'error',
            buttons: {
              confirm: 'Ok'
            },
            dangerMode: true,
          });
        }
      }
    );
  }

  if (trigger_fetch === 1) {
    run();
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
