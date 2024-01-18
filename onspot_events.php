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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
  <script src="https://smtpjs.com/v3/smtp.js"></script>
</head>
<body style="height:100vh;">
  <div class="container">
    <div class="row">
      <select class="form-select form-select-lg mb-3" id="event-select" aria-label="Large select example">
        <option selected>Select Event</option>
        <option value="gamoholix">Gamoholix</option>
        <option value="graphiculture">Graphiculture</option>
        <option value="ideathrone">Ideathrone</option>
        <option value="incognito">Incognito</option>
        <option value="mindmuse">Mindmuse</option>
        <option value="prozone">Prozone</option>
        <option value="technofuzzle">Techno Fuzzle</option>
        <option value="techrush">Tech Rush</option>
      </select>
      <button class="regis-move btn btn-success">OK</button>
    </div>
  </div>
</body>
<script>
  $(document).ready(function(){
    $(".regis-move").click(function(){
      var eventSelect=$("#event-select").val()
      if(eventSelect=="gamoholix"){
        window.location.href="onspot_form_gamoholix.php";
      }
      if(eventSelect=="graphiculture"){
        window.location.href="onspot_form_graphicultre.php";
      }
      if(eventSelect=="ideathrone"){
        window.location.href="onspot_form_ideathrone.php"
      }
      if(eventSelect=="incognito"){
        window.location.href="onspot_form_incognito.php"
      }
      if(eventSelect=="mindmuse"){
        window.location.href="onspot_form_mindmuse.php"
      }
      if(eventSelect=="prozone"){
        window.location.href="onspot_form_prozone.php"
      }
      if(eventSelect=="ideathrone"){
        window.location.href="onspot_form_technofuzzle.php"
      }
      if(eventSelect=="ideathrone"){
        window.location.href="onspot_form_techrush.php"
      }
    });
  });
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
