<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="sign.css">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<body>
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height:100vh">
      <div class="row d-flex justify-content-center align-items-center" style="height:100vh">
        <div class="col-lg-4 col-md-12 left-container d-flex justify-content-center align-items-center p-0">
          <div class="infinity-logo-side d-flex justify-content-center align-items-center">
            <img src="logo/infinity_logo.png" height="300px" width="300px" alt="">
          </div>
        </div>
        <div class="col-lg-8 col-md-12 right-holder d-flex justify-content-center align-items-center p-0">
          <div class="right-container">
            <div class="row">
              <div class="col-lg-12 h4 text-center  mt-4"><span class="regis-txt">REGISTRATION</span></div>

              <div class="col-lg-6  d-flex justify-content-center mt-5">
                <div class="name-input">
                  <input type="text" id="studentName" class="name-in" name="studentName" required>
                  <label class="name-lbl">Student Name</label>
                </div>
              </div>


              <div class="col-lg-6 d-flex justify-content-center mt-5">
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
                  <input type="password" class="name-in" id="password" name="password" required>
                  <label class="name-lbl">Password</label>
                </div>
              </div>

              <div class="col-lg-6 d-flex justify-content-center mt-5">
                <div class="name-input">
                  <input type="password" class="name-in" id="confirmPassword" name="confirmPassword" required>
                  <label class="name-lbl">Confirm Password</label>
                </div>
              </div>

              <div class="col-lg-6 d-flex justify-content-center mt-5">
                <div class="name-input">
                  <input type="text" id="yearOfStudy" class="name-in" name="yearOfStudy" required>
                  <label class="name-lbl">Year of Study</label>
                </div>
              </div>

              <div class="col-lg-6 d-flex justify-content-center mt-5">
                <div class="name-input">
                  <select id="gender" class="option-in" name="gender" required>
                    <option>Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                  </select>
                </div>
              </div>
              
              <div class="col-lg-6 mt-5 d-flex justify-content-center">
                <div class="name-input">
                  <select id="degree" class="option-in" name="degree" required>
                    <option value="BE">BE</option>
                    <option value="BE Sandwich">BE Sandwich</option>
                    <option value="B Tech">B Tech</option>
                    <option value="BSc">BSc</option>
                    <option value="ME">ME</option>
                    <option value="MCA">MCA</option>
                    <option value="M Tech">M Tech</option>
                    <option value="MSc">MSc</option>
                  </select>
                </div>
              </div>

              <div class="col-lg-6 mt-5 d-flex justify-content-center">
                <div class="name-input">
                  <select id="stream" class="option-in" name="stream" required>
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
                <button class="submit-btn">Register</button>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
        
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
