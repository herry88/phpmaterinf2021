<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:red;
        }
    </style>
</head>
<body> 
        <center>
        <img src="img/dice<?php echo rand(1,6); ?>.png" width="500" height="500" ><br>
        <button type="button" onclick="window.location.reload()"><h2>Reload Dice</h2></button>
        </center>
    
</body>
</html>