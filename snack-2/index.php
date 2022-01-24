<?php

$email = $_GET['email'];
$name = $_GET['name'];
$age = $_GET['age'];

$test = is_numeric($age);
$test2 = strlen($name);

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
    <h1>Controllo email</h1>

    <?php if(  strpos($email, '@') === false || strpos($email, '.') === false || $test2 <= 3 || $test != 1) { ?>
        <div>accesso negato</div>
    <?php } else { ?>
        <div>accesso consentito</div>
    <?php } ?>
    
    
</body>
</html>