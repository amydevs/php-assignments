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
    <?php 
        $post = !empty($_POST);
    ?>
    <div id="formContainer">
        <h1>Letter Counter:</h1>
        <div id="inputCenter">
            <?php
                $letterCountArray = [];
        
                $currentIndex = 0;
                $contents = file_get_contents('junk.txt', true) or die("Unable to open file!");
        
                while ($currentIndex <= strlen($contents)-1) {
                    $currentLetter = $contents[$currentIndex];
                    if ($letterCountArray[$currentLetter]) {

                    }
                    else {
                        
                    }
                }
                echo '<span style="width: 100%; text-align:center">'.str_replace($letter, "<b>$letter</b>",$contents).'</span> <br/>';
                if ($letterCount <= 0) {
                    echo "$letter did not occur.";
                }
                else {
                    echo "<span style='width: 100%; text-align:center'>The letter $letter occured $letterCount times.</span>";
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
        flex-wrap: wrap;
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