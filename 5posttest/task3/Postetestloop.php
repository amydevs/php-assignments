<!-- Written/Modified by June Yan (c) 2021 -->
<!doctype html>
<html lang="en">
	<?php	
    $NumberOfLoops = $_POST['number'];
    $count = 0;
    echo "Example output" ;
    do{
        echo "Loop number $count ";
        $count = $count  + 1;
    } while ($count <= $NumberOfLoops)
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