<!-- Written by June Yan (c) 2021 -->
<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Addition Page</title>
		<meta name="description" content="Addition Page">
		<meta name="author" content="June Y">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
	</head>

    <?php
        if (!empty($_POST)){
            $x = $_POST['x'];
            $y = $_POST['y'];
        }
    ?>

	<div id="app">
		<div id="formContainer">
			<span style="position: absolute; transform: translateY(-100%) translateX(2%);">Input Numbers to Add:</span>
			<form method="POST" :action="formURI">
				<input onkeyup="mask()" value="<?php if (!empty($_POST))echo $x; ?>" class="textbox" name="x" type="text"> 
				<span style="display:flex; height: auto; align-items: center;">+</span>
				<input onkeyup="mask()" value="<?php if (!empty($_POST))echo $y; ?>" class="textbox" name="y" type="text">
				<span style="display:flex; height: auto; align-items: center;">=</span>
				<button id="submitButton" type="submit" title="Click to Add">
                    <?php
                        if (!empty($_POST)){
                            echo $x+$y;
                        }
						else {
							echo "Click to Add";
						}
                    ?>
                </button>
			</form>
		</div>
	</div>
</html>


<script>
var object = {x:[''], y:['']}

mask();

function mask() {
    var elementList = document.querySelectorAll('.textbox')
    for (let index = 0; index < elementList.length; index++) {

        var element = elementList[index];
        var array = object[element.name]
        if(isNaN(element.value) && !element.value.startsWith("-")){
            var array = object[element.name]
            element.value = (array)[0]
        }
        else {
            array.unshift(element.value);
        }	
        array.length = 2;
    }	
};
</script>

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
	#formContainer {
		background: var(--background);
		border: black;
		border-radius: 50px;
		height: auto;
		width: 100%;
		padding: 5%;
	}
	form {
		display: inline-flex;
		width: auto;
	}
	.textbox {
		font-family: Open Sans,sans-serif;
		color: #fff;
		border-radius: 6px;
		border: 0;
		background: var(--background);
		width: auto;
		padding: 5px 15px;
		text-align: center;
		margin: 5px;
	}
	#inputCenter{
		display: flex;
		align-items: center;
		justify-content: center;
	}
	#submitButton {
		font-family: Open Sans,sans-serif;

		border-radius: 6px;
		border: 0;
		background: var(--background);
		width: auto;
		padding: 5px 15px;
		text-align: center;
		margin: 4px;
		font-family: Open Sans,sans-serif;
		color: var(--textColor);
		cursor: pointer;
	}
</style>