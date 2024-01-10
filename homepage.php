<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinity</title>
    <link rel="stylesheet" href="homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-scrollify@1.0.21/jquery.scrollify.min.js"></script>
</head>
<body style="background: linear-gradient(to right,#005067,#b2b2b2,#00667b);">
<section class="logo_sec">
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
                    <a class="nav-link text-white" href="#">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">SPONSORS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">EVENTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">SCHEDULE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">GALLERY</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-success" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-danger" href="#">Sign Up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 justify-content-center d-flex">
            <img src="logo/infinity_logo.png" height="250px" width="250px" alt="">
        </div>
    </div>
</div>
</section>
<section class="abt_us_sec">
    <div class="col-lg-12 justify-content-center d-flex align-items-center">
        <div class="abt-us-cont">
            <div class="row" >
                <div class="col-lg-6 justify-content-center d-flex align-items-center">
                    <lottie-player src="https://lottie.host/0803472b-88c4-446b-892d-83752ffb5e3d/jRiM1ZXCfX.json" background="##FFFFFF" speed="1" class="anim-disp" loop autoplay direction="1" mode="normal"></lottie-player>
                </div>
                <div class="col-lg-6 justify-content-center mt-5">
                    <h1 class="heading-color">ABOUT US</h1>
                    <p class="content mt-3">
                    <b>"Dive into the Digital Cosmos"</b>
                    <br><br>
                    An digital delight to all the  enthusiastic technocrats out there with our grand symposium!!!
                    <br><br>
                    Infinity 2k24 is back with it's majestic cosmic fourth edition of the intra-college technical and non-technical symposium. A new fusion of fun and technical wisdom emphasizes the digital world of advanced technologies in identifying new interests despite the challenging need to develop ,learn and contribute more to the technical age with our five captivating technical events, three amazing non-technical events and a flagship event.
                    <br><br>
                    <b>Open for 1st, 2nd & 3rd years of all 
                    B.E/B.Tech/B.Sc/M.Sc/MCA programes.</b>
                    </p>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sponsers_sec">
    <div class="row">
        <div class="col-lg-12">
            <div class="sponsers-div">

            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
      $(function(){
    $.scrollify({
        section:".logo_sec",
        interstitialSection:".logo_sec,.abt_us_sec",
        scrollSpeed:10,
        before:function(section){
            if(section==1){
              $(".content").addClass("content_display");
              $(".abt-us-cont").addClass("abt-us-cont-disp")
            }
            if(!section==1){
              $(".content").removeClass("content_display");
              $(".abt-us-cont").removeClass("abt-us-cont-disp")
            }
        }
    })
})
</script>
</body>
</html>
