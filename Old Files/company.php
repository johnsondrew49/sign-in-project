<?php
    
    if (isset($_POST['submit'])){ //Stops the errors from appearing when loading the page up
        
        //Variable Creation
        $company = $_POST["Company"];
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
    
    <form  method = "post" action="to-see.php">
        <label>Enter The Company You Are From:</label>
        <input type =  "text" name = "Company"><br>
        <button>Submit</button>
    </form>
</body>
</html>