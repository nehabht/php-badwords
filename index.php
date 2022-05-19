<?php


$quoteDany = "Fire cannot kill a dragon.";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- stampare a schermo la stringa creata -->
    <h1><?php echo $quoteDany ?></h1>

    <!-- stampare il numeri di caratteri nella stringa  -->
    <p>
        numero di caratteri nella stringa: 
        <?php echo strlen($quoteDany)?>
    </p>


    <!-- Una parola da censurare viene passata dall'utente tramite parametro GET. -->
    <div>
        <h5>testo censurato:</h5>
        <p>
        <?php
            $textCensored = str_replace($_GET['censura'], '***', $quoteDany );
            echo $textCensored
        ?>
        </p>
    </div>

    <!-- lunghezza dopo censura -->
    <p>
        numero di caratteri nella stringa: 
        <?php echo strlen($textCensored)?>
    </p>


</body>
</html>