<?php
$numberArray =[]

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
    <?php while(count($numberArray) < 15) { ?>
        <?php $number=rand(1, 110) ?>

        <?php if(in_array($number, $numberArray)) {?>
            <?php } else {  ?>
                <?php $numberArray[] = $number ?>
            <?php } ?>
            
    <?php } ?>
    <?php var_dump($numberArray) ?>
</body>
</html>