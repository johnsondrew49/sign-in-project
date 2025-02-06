<?php
  $name = $_POST['name'];
  $tosee = $_POST['to-see'];
  $registration = $_POST['registration'];
  $company = $_POST['company'];

  echo $name;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Lo's Pharmacy</title>
  </head>

  <body>
    <div class = "img">
      <p style="background-color: blue;"></p>
      <img class = "logo"src="img/los-logo.jpg" alt="Lo's Pharmacy Logo"> <!--Need Transparent White Logo-->
    </div>
    <img class = "tick" src="img/green-tick.png" alt="Green Tick">
    <p class = "text">You Have Successfully Signed In</p>
    <p class ="wifi">Wifi Name: LOs-Wifi WiFi <br> Password: Warehouse65</p>
    <button type = "button" class="btn btn-primary">Completed</button>
  </body>
</html>