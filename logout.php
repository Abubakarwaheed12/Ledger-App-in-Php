<?php
session_start();
if(session_destroy())
{
header("Location: login.php");
}
?>

<html>
    <head>
        <title>LOGOUT FROM THIS PAGE </title>
        <link rel="icon" type="image/x-icon" href="icon/maex.png">  
    </head>
    <body>
        
    </body>
</html>