<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
                
        
        <?php
session_start(); 
        
if (isset($_SESSION['Success']))
    $_SESSION["Success"] = $_SESSION["Success"];
else 
    $_SESSION["Success"] = 0;

    $_SESSION["Count"] = 1;
     
switch ($_SESSION["Success"]) {
    case 100: $Mark = "A";break;
    case 90:  $Mark = "B";break;
    case 80:  $Mark = "C";break;
    case 70:  $Mark = "D";break;
    case 60:  $Mark = "E";break;
}
if ($_SESSION["Success"] <= 50) {
    $Mark = "FX";
}

        ?>
        
<div id="grad1">        
        
<img id="mol_pic" src="canvas_pic2.jpg" style="position: absolute; left: 50px; top: 145px;">
<h1 style="position: absolute; left: 100px; top: 170px; color: yellow; font-family:Verdana; font-size:50px">Úspešnosť: <?php echo $_SESSION["Success"]; ?>   %</h1>
<h1 style="position: absolute; left: 130px; top: 280px; color: yellow; font-family:Verdana; font-size:50px">Hodnotenie: <?php echo $Mark; ?></h1>
        

<ul>
    <li><a href="gamex.php" style="position: absolute; left: 230px; top: 200px; ">Nová hra</a></li>
</ul> 


</div>
        
        <?php

        ?>     

    </body>
</html>
