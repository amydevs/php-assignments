<!-- Written by June Yan (c) 2021 -->
<!DOCTYPE html>

<?php
$servername = "localhost";
$user = "root";
$password = "password";
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
    $conn->close();
}
?> 

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Demo</title>
        <script src="js/vue.js"></script>
	</head>

	<body>
        <div id="app">
            <form method="POST" action="">
                Username:
                <input class="textbox" name="username" type="text"> 
                Score:
                <input class="textbox" name="score" type="text">
                <button id="submitButton" type="submit">Submit</button>
                
            </form>
        </div>  
	</body>
</html>

<script>
	new Vue({
		el: "#app",
		data() { 
			return {
				xValue: '',
				yValue: '',
				inputDefaultValue: 'Click to Add',
				inputValue: 'Click to Add'
			}
		},
		mounted() {
		},
		methods: {
		},
		watch: {
		}
	});
</script>


