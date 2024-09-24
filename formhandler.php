<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenAPI project example</title>
    <link rel="stylesheet" href="style.css?v=3"/>
</head>
<body>
    <!--This section shows the generated url and its secret.-->
    <h1>Availability of secret (1 minute)</h1>
    <h2></h2>
    <h3 id="box" style="display:none">Time is over! Please go back to the forms section!</h3>
    
    <script src="timer.js"></script>
</body>
</html>

<?php
    //Through the include, this server reaches the secret server that is handling the API.
    include("server2.php");
    if($usage > 0)
    {
        echo "<h3>$letmehaveit</h3>";
        echo "<h3>You can view the secret on this surface $usage times</h3>";
    }
    else if($usage == 0)
    {
        echo "<h3>$letmehaveit</h3>";
        echo "<h3>Warning! You are using up your last chance of viewing the secret on this surface!</h3>";
    }
    else if($usage < 0)
    {
        echo "<h3>Secret is no longer available, it has been removed from the list!</h3>";
    }
?>