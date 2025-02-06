<?php
    
    if (isset($_POST['submit'])){ //Stops the errors from appearing when loading the page up
        
        //Variable Creation
        $name = $_POST["Name"];
    }
?>

<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lo's Pharmacy</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="stylesheet.css">
  </head>

  <body margin=0>
    <div></div>
    <div class = "img">
      <p style="background-color: blue;"></p>
      <img class = "logo"src="img/los-logo.jpg" alt="Lo's Pharmacy Logo"> <!--Need Transparent White Logo-->
    </div>

    <form method = "POST" action = "completed.php">    <!--Only Moves Name input acrros no idea why-->
        <label class = "label name">*Enter Your Name:*</label><br>
        <input required class= "input w-100 name" type= "text" name = "name"><br>

        <label class = "label to-see">*Enter Who You Are Here To See:*</label> <br>
        <input class = "input to-see"type = "text" name = "to-see"><br>
      
        <label class = "label registration">Enter Your Vehicles Registration:</label> <br>
        <input class = "input registration" type = "text" name = "registration"><br> 

        <label class = "label company">Enter Which Company You Are From:</label> <br>
        <input class = "input company" type = "text" name = "company"><br>

        <button type = "submit" class="btn btn-primary">Submit</button>
    </form>
  </body>
</html>