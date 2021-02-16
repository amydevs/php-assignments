<!-- Written/Modified by June Yan (c) 2021 -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Customisation Form</title>
        <meta name="description" content="June's Form Result">
        <meta name="author" content="June Y">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
    </head>

    <?php
    $fName = $_POST['firstName'];
    $LName = $_POST['lastName'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $colour = $_POST['colour'];
    get_defined_vars();
    echo "Hello $fName $LName, your age is $age and 
    your favourite colour is $colour, Gender: $gender" ; 
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