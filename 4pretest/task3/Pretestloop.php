<!-- Written/Modified by June Yan (c) 2021 -->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Answer</title>
	</head>
    <?php	
        $NumberOfLoops = $_POST['number'];
        $count = 0;
        While ($count <= $NumberOfLoops)
        {
            echo "Loop number $count <br>";
            $count = $count  + 1 ;
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