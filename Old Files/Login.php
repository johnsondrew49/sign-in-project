<?php
    
    if (isset($_POST['submit'])){ //Stops the errors from appearing when loading the page up
        
        //Variable Creation
        $username = $_POST["Username"];
        $password = $_POST["Password"];
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
  <form action="index.php">
    <button>Go Back</button>
  </form>

  <form  method = "post" action="History.php">
        <label>Username:</label>
        <input type = "text" name = "Username"><br>
        <label>Password:</label>
        <input tpye = "text" name = "Password"><br>
        <button>Submit</button>
    </form>

    <div><br>Note: To Use Same login As Head Office portal eg. same authentication method</div>
</html>
