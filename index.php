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
    <form>
      <script> var name ="<?= $_POST['name'] ?>"; </script>
          <!--Input box Creation -->
      <form  method = "post">
          <label>*Enter your full Name:</label>
          <input type =  "text" name = "Name"><br>
      </form>
      <form method = "post">
        <label>*Enter Who You Are Here To See:</label>
        <input type = "text" to-see = "to-see"><br>
      </form>
      <form method = "post">
        <label>Enter Your Vehicles Registration:</label>
        <input type = "text" registration = "registration"><br>
      </form>
      <form method = "post" action = "completed.php">
        <label>Enter Which Company You Are From:</label>
        <input type = "text" company = "company"><br>
        <button>Submit</button>
      </form>
    </form>
  </body>
</html>