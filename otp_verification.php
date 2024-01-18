<?php
include('con.php');
session_start();
$roll_no=$_SESSION['rollnumber'];
$mail=$_SESSION['email'];
$name=$_SESSION['studentName'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <link rel="stylesheet" href="otp_verification.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" ></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
</head>
<body class="bg-dark">
    <div class="container d-flex justify-content-center align-items-center" style="height:100vh;">
        <div class="row d-flex justify-content-center align-items-center" style="height:100vh;">
            <div class="col-lg-12 d-flex justify-content-center align-items-center">
                <div class="otp-back">
                    <h4 class="text-center mt-3" class="otp-text">Enter your OTP</h4>
                    <div class="row mt-4 ms-2">
                        <div class="col-lg-3">
                            <input type="number" id="digit1" class="form-control" oninput="this.value = this.value.slice(0, 1);movecursor(this,'digit2')" required>
                        </div>
                        <div class="col-lg-3">
                            <input type="number" id="digit2" class="form-control" oninput="this.value = this.value.slice(0, 1);movecursor(this,'digit3')" required>
                        </div>
                        <div class="col-lg-3">
                            <input type="number" id="digit3" class="form-control" oninput="this.value = this.value.slice(0, 1);movecursor(this,'digit4')" required>
                        </div>
                        <div class="col-lg-3">
                            <input type="number" id="digit4" class="form-control" oninput="this.value = this.value.slice(0, 1);movecursor(this,null)" required>
                        </div>
                        <div class="col-lg-12 d-flex justify-content-center align-items-center mt-4">
                            <button type="submit" class="btn submit-but text-white" id="otp_button" onclick="run()">Verify</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
function movecursor(curin,nxtinput){
    let current_in=curin.value;
    if(current_in==1 && nxtinput){
        document.getElementById(nxtinput).focus();
    }
}
function run(){
    let received_otp=localStorage.getItem('otp_send');
    let digit1=document.getElementById('digit1').value;
    let digit2=document.getElementById('digit2').value;
    let digit3=document.getElementById('digit3').value;
    let digit4=document.getElementById('digit4').value;
    let rand_prod=Math.floor(100+Math.random()*900);
    let roll_fetch=<?php echo json_encode($roll_no);?>;
    let name_fetch=<?php echo json_encode($name);?>;
    let mail_fetch=<?php echo json_encode($mail);?>;
    let final_stuid=roll_fetch+"_"+rand_prod
    let otp_tot=digit1+digit2+digit3+digit4;
    let otp_int_conv=parseInt(otp_tot);
    let otp_rec=JSON.parse(received_otp);
    let msg=`<h1 style="color:#66CAE7">INFINITY ♾️</h1><br><h3>Hello ${name_fetch}</h3><br><p>Your Student ID: <b>${final_stuid}</b>`;
    console.log(otp_rec);
    if(otp_int_conv==otp_rec){
        console.log("Verified");
        $.ajax({
            type:"POST",
            url:"otp_run.php",
            data:{
                student_id:final_stuid
            },
            success:function(response){
                Email.send({
        Host: 'smtp.elasticemail.com',
        Username: 'infinity2k24psgtech@gmail.com',
        Password: '1158C7EAE702F976E5D954AA2F464E912750',
        To: '<?php echo $_SESSION['email']; ?>',
        From: 'infinity2k24psgtech@gmail.com',
        Subject: 'Registration Confirmation',
        Body: `${msg}`
    }).then(function (message) {
        swal({
            text: 'Registration Confirmed. Confirmation email sent(Check SPAM).',
            title: 'Success',
            icon: 'success',
            buttons: {
                confirm: 'Ok'
            },
            dangerMode: true,
        }).then((willClose)=>{
            if(willClose){
                window.location.href="loading.php";       
            }
        });
    });
            },
            error:function(response){
                swal({
            text:"Verification Failed",
            title:"Error",
            icon:"error",
            Buttons:{
                confirm:"Ok"
            },
            dangermode:true,
        }).then((willClose)=>{
            if(willClose){
                window.location.href="index.php"
            }
        }
        )
            }
        })
    }
    else{
        swal({
            text:"You Have Entered an wrong OTP",
            title:"Error",
            icon:"error",
            Buttons:{
                confirm:"Ok"
            },
            dangermode:true,
        }).then((willClose)=>{
            if(willClose){
                swal.close()
            }
        }
        )
    }
}
$(document).ready(function(){

})
</script>

</html>