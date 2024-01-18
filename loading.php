<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
    <link rel="stylesheet" href="loading.css">
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-o3FuS13jC3FA/Jp2pijDQXEn5MGC1pQa0cINJte8l/gAd/UuNt1B4hQUpiJTRVjG" crossorigin="anonymous"></script>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa; /* Optional: Set a background color for the entire page */
        }

        .cont-disp {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="cont-disp">
                <div class="col-lg-12 justify-content-center d-flex align-items-center">
                    <lottie-player src="https://lottie.host/bb3b8614-bcbf-470d-bcd4-aff5cd21a794/YKiufw78rQ.json" background="##FFFFFF" speed="1" style="width: 300px; height: 300px" autoplay direction="1" mode="normal"></lottie-player>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
     $(document).ready(function() {
                history.replaceState(null, document.title, "otp_verification.php");
            window.onpopstate = function(event) {
            history.go(1);
            }
            });
</script>
</html>
