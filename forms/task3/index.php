<!-- Written by June Yan (c) 2021 -->
<!DOCTYPE html>

<?php
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "competition";

// Create connection
$conn = new mysqli($servername, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (!empty($_POST)){
    $username = $_POST['username'];
    $score = $_POST['score'];
    $sql = "INSERT INTO main (Username, Score)
    VALUES ('$username', $score)";
    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?> 

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Demo</title>
	</head>

	<body>
        <div id="app">
			<div id="formContainer">
				<form method="POST" action="">
					<div id="inputCenter">
						<span style="margin: 0px 5px 0px 5px;">
							Username:
							<input class="textbox" name="username" type="text"> 
						</span>
						<span style="margin: 0px 5px 0px 5px;">
							Score:
							<input onkeyup="mask()" class="textbox mask" name="score" type="text">
						</span>
					</div>
					<div id="inputCenter"><button id="submitButton" type="submit">Submit</button></div>
					
				</form>
			</div>
				<div>
					<?php
						$sql = "SELECT * FROM main 
						ORDER BY Score DESC;";
						$result = mysqli_query($conn, $sql);
						
						if (mysqli_num_rows($result) > 0) {
							$index = 1;
							// output data of each row
							while($row = mysqli_fetch_assoc($result)) {
								echo '<div class=listItem>'.$index.'<div style="width: 100px"></div>User: '.$row["Username"].'<div style="width: 100px"></div>Score: '.$row["Score"].'<div style="width: 100px"></div>'.$row["SubmitionDate"].'</div>';
								$index++;
							}
						} else {
						echo "0 results";
						}
						$conn->close();
					?>
				</div>
        	</div>  
	</body>
</html>

<script>
	// new Vue({
	// 	el: "#app",
	// 	data() { 
	// 		return {
	// 			xValue: '',
	// 			yValue: '',
	// 			inputDefaultValue: 'Click to Add',
	// 			inputValue: 'Click to Add'
	// 		}
	// 	},
	// 	mounted() {
	// 	},
	// 	methods: {
	// 	},
	// 	watch: {
	// 	}
	// });
	var object = {score:['']}

	mask();

	function mask() {
		var elementList = document.querySelectorAll('.mask')
		for (let index = 0; index < elementList.length; index++) {

			var element = elementList[index];
			var array = object[element.name];

			if(isNaN(element.value) && !element.value.startsWith("-")){
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
	#app {
		height: 100%;
		width: 100%;
	}
    body {
        background: #212629;
        font-family: Open Sans, sans-serif;
		font-size: 20px;
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
        border-radius: 6px;
        padding: 5%;
		margin: 5px;
    }
    .textbox {
        font-family: Open Sans, sans-serif;
        color: #fff;
        border-radius: 6px;
        border: 0;
        background: var(--background);
        width: 150px;
        padding: 5px 15px;
        text-align: center;
    }
    #inputCenter {
        display: inline-flex;
        align-items: center;
        justify-content: center;
		width: 100%;
		margin: 5px;
    }
    #submitButton {
        font-family: Open Sans, sans-serif;
        color: var(--textColor);
        border-radius: 6px;
        border: 0;
        background: var(--background);
        width: 150px;
        padding: 5px 15px;
        text-align: center;
        cursor: pointer;
    }	
	.listItem {
		overflow: hidden;
		position: relative;
		display: flex;
		width: auto;
		align-items: center;
		justify-items: center;
		justify-content: center;
		align-content: center;
		text-align: center;
		height: 75px;
		margin: 5px;
		border-radius: 6px;
		background: var(--background);
		cursor: pointer;
		color: var(--textColor);
		grid-template-columns: 50px, 200px;
		grid-template-rows: 100%;
	}
</style>
<style module>


