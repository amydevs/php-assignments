<!-- Written by June Yan (c) 2021 -->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Answer</title>
	</head>
   <?php	
      $num1 = $_POST['number1'];
      $num2 = $_POST['number2'];
      if (strlen($num1) == 0 || strlen($num2) == 0) {
         echo "Error: No Data Entered";
      }
      else if ($num1 == $num2) {
         echo "Numbers are equal.";
      }
      else {
         if ($num1 > $num2)
         { 
            echo "$num1 is Bigger." ;  
         }
         
         else 
         {
            echo "$num2 is Bigger.";
         }
      }
   ?>
</html>

<style>
	/* sets variables */
    :root {
        --textColor: #e22c78;
        --background: rgba(255, 255, 255, 0.1);
    }
	html {
		height: 100%;
	}
	body {
		background: #212629;
		font-family: Open Sans,sans-serif;
		color: var(--textColor);
		display: flex;
		justify-content: center;
		align-items: center;
		height: 100%;
		margin: 0;
	}
</style>