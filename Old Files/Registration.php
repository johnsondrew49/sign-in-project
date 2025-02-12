<?php
    
    if (isset($_POST['submit'])){ //Stops the errors from appearing when loading the page up
        
        //Variable Creation
        $registration = $_POST["Registration"];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<body>
    <form action="Login.php">
        <button>Login</button>
    </form>
    
    <form  method = "post" action="Company.php">
        <label>Enter Your Vehicle Registration:</label>
        <input type =  "text" name = "Registration"><br>
        <button>Submit</button>
    </form>
</body>
</html>