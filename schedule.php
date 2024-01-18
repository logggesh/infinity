<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <link rel="stylesheet" href="schedule.php">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" ></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script></head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav class="navbar navbar-expand-lg bg-black">
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

    </div>
</body>
</html>