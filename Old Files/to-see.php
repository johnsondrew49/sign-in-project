<?php
    
    if (isset($_POST['submit'])){ //Stops the errors from appearing when loading the page up
        
        //Variable Creation
        $to_see = $_POST["To-See"];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Login.php">
        <button>Login</button>
    </form>
    
    <form  method = "post" action="index.php">
        <label>Enter The Name of Who You Are Here To See:</label>
        <input type =  "text" name = "To See"><br>
        <button>Submit</button>
        <!--<script>alert("Completed");</script> -->
    </form>
</body>
</html>