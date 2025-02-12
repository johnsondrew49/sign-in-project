<?php
    
    if (isset($_POST['submit'])){ //Stops the errors from appearing when loading the page up
        
        //Variable Creation
        $name = $_POST["Name"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lo's</title>
</head>
<body>
    <script> var name ="<?= $_POST['name'] ?>"; </script>
        <!--Input box Creation -->
    <form  method = "post" action="Registration.php">
        <label>Enter your full Name:</label>
        <input type =  "text" name = "Name"><br>
        <button>Submit</button>
    </form>
    <!--Creates the pop up box --> 
    <script>alert("Completed");</script>
</html>

<?php
   // if(isset($_POST['submit'])){  //prevents error lines from appearing when first loading website up
     //   echo "You name is: $name. Your vehicle registration is: $registration. You Work for: $company. You are here to see: $to_see."; 
    //}
?>