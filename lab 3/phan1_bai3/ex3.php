<!DOCTYPE html>
<html>
<head>
    <title>1710779-bai3</title>
    <meta charset="utf-8"/>
    <style type="text/css">
        body {
            background-color: tomato;
        }
         
    </style>
</head>
<body>
    <?php
        echo "For loop: ";
        for ($i=1; $i <= 99; $i+=2) { 
        	echo $i." ";
        }
        ?>
    <br>
    <br>
    <br>
    <br>
    <?php
        echo "While loop: ";
        $i = 1;
        while ($i <= 99) {
        	echo $i." ";
        	$i+=2;
        }
    ?>
</body>