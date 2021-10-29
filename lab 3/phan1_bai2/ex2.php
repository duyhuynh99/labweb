<!DOCTYPE html>
<html>
<head>
    <title>1710779-bai2</title>
    <meta charset="utf-8"/>
    <style type="text/css">
        body {
            background-color: tomato;
        }
         
    </style>
</head>
<body>
	<form action = "ex2.php" method = "post">
    	<input type="text" id="number" name="number" min="1" max="99999999999999999"
		placeholder="Please input number here:....">
		<br>
		<br>
		<input type="submit" />
	</form>
	<br>
    <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST'){	
			if (empty($_POST['number']))
			{
				echo "let's type something!";
			}
			else{
	        $temp = $_POST['number']%5;
	        switch ($temp) {
	        	case 0:
	        		echo "Hello";
	        		break;
	        	case 1:
					echo "How are you?";
	        		break;
	        	case 2:
					echo "I’m doing well, thank you";
	        		break;
	        	case 3:
					echo "See you later";
	        		break;
	        	case 4:
					echo "Good-bye";
	        		break;
				default:
					echo "let's type something!";				
	            }
	        }}
    ?>
</body>