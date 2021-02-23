<!-- Written/Modified by June Yan (c) 2021 -->
<!doctype html>
<html lang="en">
    <head>
        <title>Letter Counter</title>
        <meta name="description" content="June's Form">
        <meta name="author" content="June Y">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
    </head>
    <div id="formContainer">
        <h1>Letter Counter:</h1>
        <form name="form" method="post" action="">
            Select Letter to Count: <input name='letter' type='text' value="<?php if(!empty($_POST)) {echo $_POST['letter'];} ?>"><br>
            <div style="margin:5px" id="inputCenter"><button name='run' type='submit' value='run'>Run</button></div>
        </form> 
        <div id="inputCenter">
            <?php
                if (!empty($_POST))
                {
                    $letter = $_POST['letter'];
                    $letterCount = 0;
            
                    $currentIndex = 0;
                    $contents = file_get_contents('junk.txt', true) or die("Unable to open file!");
            
                    while ($currentIndex <= strlen($contents)-1) {
                        if ($contents[$currentIndex] == $letter) {
                            $letterCount++;
                        }
                        $currentIndex++;
                    }
                    
                    if ($letterCount <= 0) {
                        echo "$letter did not occur.";
                    }
                    else {
                        echo "The letter $letter occured $letterCount times.";
                    }
                }
            ?>
        </div>
    </div>
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
        font-family: Open Sans, sans-serif;
        color: var(--textColor);
        display: inline-flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 100%;
        margin: 0;
    }
    #formContainer {
        background: var(--background);
        border: black;
        border-radius: 50px;
        padding: 5%;
    }
    input {
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
        display: flex;
        align-items: center;
        justify-content: center;
    }
    button {
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
    p {
        white-space: nowrap;
        margin: 5px;
    }
</style>