<!-- Written/Modified by June Yan (c) 2021 -->
<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Addition Result</title>
        <meta name="description" content="Addition Page">
        <meta name="author" content="June Y">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
    </head>

    <p>Your answer is: 
        <span id="answer">
        <?php
        $x = $_POST['x'];
        $y = $_POST['y'];
        echo $x+$y;
        ?>
        </span>
    </p>
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
