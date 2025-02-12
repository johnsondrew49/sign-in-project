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
    <div class = "img">
      <img class = "logo"src="img/los-logo.jpg" alt="Lo's Pharmacy Logo">
      <p style="background-color: blue;"></p>
    </div>

    <form method = "POST" action = "completed.php"> 
        <label class = "label name">*Enter Your Name:*</label><br>
        <input required class= "input name" type= "text" data= "name"><br>

        <label class = "label to-see">*Enter Who You Are Here To See:*</label> <br>
        <input required class = "input to-see"type = "text" data = "to-see"><br>
      
        <label class = "label registration">Enter Your Vehicles Registration:</label> <br>
        <input class = "input registration" type = "text" data = "registration"><br> 

        <label class = "label company">Enter Which Company You Are From:</label> <br>
        <input class = "input company" type = "text" data = "company"><br>

        <button type = "submit" class="btn btn-lg btn-primary">Submit</button>
        <div class="strip">a</div>
    </form>
  </body>
</html>