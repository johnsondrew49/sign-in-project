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
  </head>

  <body>
    <form method = "POST" action = "completed.php">    <!--Only Moves Name input acrros no idea why-->
        <lable>Enter Your Name: </lable>
        <input type= "text" name = "name"><br>

        <label>*Enter Who You Are Here To See:</label>
        <input type = "text" name2 = "to-see"><br>
      
        <label>Enter Your Vehicles Registration:</label>
        <input type = "text" name3 = "registration"><br>

        <label>Enter Which Company You Are From:</label>
        <input type = "text" name4 = "company"><br>
      
        <button>Submit</button>
    </form>
  </body>
</html>