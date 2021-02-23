<!-- Written/Modified by June Yan (c) 2021 -->
<!doctype html>
<html lang="en">
    <head>
        <title>Posttest Loop Test</title>
        <meta name="description" content="June's Form">
        <meta name="author" content="June Y">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
    </head>
    <?php
    // Declare an Array
    $Names = array();
    $Scores = array();

    //fill array
    $Names[0] = "billy";
    $Names[1] = "mary";
    $Names[2] = "johno";
    $Names[3] = "sally";
    $Names[4] = "frank";
    $Names[5] = "jill";

    //fill array
    $Scores[0] = "75";
    $Scores[1] = "82";
    $Scores[2] = "68";
    $Scores[3] = "93";
    $Scores[4] = "87";
    $Scores[5] = "88";

    // Display array contents
    echo"$Names[0] got a score of $Scores[0] 
    $Names[1] got a score of $Scores[1]
    $Names[2] got a score of $Scores[2] 
    $Names[3] got a score of $Scores[3] 
    $Names[4] got a score of $Scores[4] 
    $Names[5] got a score of $Scores[5]
    ";
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
        font-family: Open Sans, sans-serif;
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
    p {
        white-space: nowrap;
        margin: 5px;
    }
</style>