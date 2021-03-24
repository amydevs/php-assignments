<!-- Written/Modified by June Yan (c) 2021 -->
<!doctype html>
<html lang="en">
	<head>
        <title>Functions</title>
        <meta name="description" content="June's Form">
        <meta name="author" content="June Y">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
    </head>
	<?php	
        function menu($day, $meal)
        {
            if ($day == 'Saturday') {
                if ($meal == "B")
                {
                    echo "MENU for Saturday: Breakfast";
                }
                else if ($meal == "L")
                {
                    echo "MENU for Saturday: Lunch";
                }
                else if ($meal == "D")
                {
                    echo "MENU for Saturday: Dinner";
                }
                else
                {
                    echo "<p  class='Paragraph'>Not a valid MENU for Saturday</p>";
                }
            }
            else if ($day == 'Sunday') {
                if ($meal == "B")
                {
                    echo "MENU for Sunday: Breakfast";
                }
                else if ($meal == "L")
                {
                    echo "MENU for Sunday: Lunch";
                }
                else if ($meal == "D")
                {
                    echo "MENU for Sunday: Dinner";
                }
                else
                {
                    echo "<p  class='Paragraph'>Not a valid MENU for Saturday</p>";
                }
            }
            else {
                echo "No MENU";
            }
        }/*end of function*/

        // Get data from the form
        $day = $_POST['day'];
        $meal = $_POST['meal'];

        // Call function
        menu("$day", "$meal");
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