<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body onload="DynamicTimer();">
    
    <p id="groupa"></p> 
    <script>        
        document.getElementById('groupa').innerHTML="This is my first JS code";
    </script>
<br><br>

<button type="button" onclick="document.getElementById('myimg').src='image/bulb_on.png'">Turn on</button>

<img src="image/bulb.jpg" alt="myimg"style="width:200px";>

<button type="button" onclick="document.getElementById('myimg').src='image/bulb_off.png'">Turn off</button>
<br><br>

<?php date_default_timezone_set("Africa/Nairobi"); ?>
Static timer;<?php print date("H:i:s");?>
<br>
Dynamic timer: <span id="dtmer"></span>

<br><br>

<script>
    document.write('listen to me');
</script>

<br><br>

<script>
    document.write(5+3);
</script>

<br><br>

<script>
    //window.alert('your database is ready!!')
</script>

<br><br>

<script>
    console.log('Add information here');
</script>

<br><br>

<a href="" onclick="return confirm('are u sure?');">Delete</a>

<br><br>

<button type="button" onclick="window.print();">Print page</button>
<br><br>

<script>
    let streetname= prompt('what is your street name?');
    var firstname="Alex";
    const MyAge = 40;
    document.write(firstname+"A.K.A"+streetname+"is" +MyAge+ "years old.");
</script>

<br><br>
 <script src="script.js"></script>   
</body>
</html>