function mailsend(email, name) {
    Email.send({
        Host: "smtp.elasticemail.com",
        Username: "infinity2k24psgtech@gmail.com",
        Password: "1158C7EAE702F976E5D954AA2F464E912750",
        To: email,
        From: "infinity2k24psgtech@gmail.com",
        Subject: "OTP Verification",
        Body: '<h1>Hello ' + name + '</h1><br><p>Your OTP is:' + otp_generate + '</p>'
    });
}