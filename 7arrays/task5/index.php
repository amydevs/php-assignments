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
    //DECLARE ARRAY
    $UserNames = array();
    $Passwords = array();
    //FILL ARRAY
    $UserNames[1] = "Luke.Skywalker";
    $UserNames[2] = "Sith.Badmanner";
    $UserNames[3] = "Liz.Stone";
    $UserNames[4] = "Billy.Zanny";
    $UserNames[5] = "Bob.Thorton";
    $UserNames[6] = "Mary.StarWars";
    //Fill array password()
    $Passwords[1] = "StarWars";
    $Passwords[2] = "badboy";
    $Passwords[3] = "heavy";
    $Passwords[4] = "freeek";
    $Passwords[5] = "upgrade";
    $Passwords[6] = "theforce";
    
    echo "Example output
    " ;
        
    $UN  = trim($_POST['UserName']);
    $PW  = trim($_POST['Password']) ;
    $count = 1;
    $Found = "False";
    $account = "False";
    while ($count <= 6 AND $account == "False")
    {
        if ($UN == $UserNames[$count]) 
        {  
            $Found = "True";
            if ($PW == $Passwords[$count])
            { 
                $account = "True";
            }
        }
        $count = $count +1;
    }
    if ($account == "True")
        {echo"Hi $UN welcome to the WebSite";}
    else
        if ($Found == "True")
            {  echo"Sorry $UN  your Password is INCORRECT";}
        else
            {  echo"Sorry $UN  you DO NOT have an account";}
        
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