<!DOCTYPE html>
<html>
<head>
    <title>1710779-bai4</title>
    <meta charset="utf-8"/>
    <style type="text/css">
        body {
            background-color: tomato;


        }
        table{
            border-collapse:collapse;
            background-color:yellow;
            font-size: 20px;
            border-color: black;
        }
        th{
            width: 75px;
            height: 75px;
            color:blue;
            border-style: dashed;
        }
        
         
    </style>
        
</head>
<body>
    <table>
        <?php
            for ($i=1; $i <=7 ; $i++) { 
                echo "<tr>";
                for ($j=1; $j <=7; $j++) { 
                    echo "<th>".$i*$j."</th>";
                }
                echo "</tr>";
            }
        ?>
    </table>

</body>