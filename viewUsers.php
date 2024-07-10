<?php
    session_start();
    require_once "config/dbConnect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML-WELCOME</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <div class="topnav">
    <a href="">index</a>
        <a href="">about</a>
        <a href="">contact</a>
        <a href="">hours of operation</a>
        <a href="">follow us</a>
        <a href="">location</a>
        <a href="">menu</a>

        <div class="topnav-right">
            <?php
                 if(isset($_SESSION["control"]))
            ?>
            <div class="usertitle">
                Hello <?php print $_SESSION["control"]["fullname"];?>
            </div>
          
            <a href="processes/user_processes.php?signout" >signout </a>
            <?php
            ?>    
                     
        </div>    
    </div> 
    <div class="footer">
        Copyright &copy; BBIT 2024
    </div>
    
</body>
</html>