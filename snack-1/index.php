<?php
$basketMatches = [
    [
        'HomeTeamName' => 'virtus',
        'pointScoredH' => '44',
        'guestTeamName' => 'olimpia',
        'pointScoredG' => '54',
        
    ],
    [
        'HomeTeamName' => 'elites',
        'pointScoredH' => '49',
        'guestTeamName' => 'lazio',
        'pointScoredG' => '14',
        
    ],
    [
        'HomeTeamName' => 'cantu',
        'pointScoredH' => '45',
        'guestTeamName' => 'abruzzo',
        'pointScoredG' => '31',
        
    ],
    [
        'HomeTeamName' => 'franchi',
        'pointScoredH' => '88',
        'guestTeamName' => 'trist',
        'pointScoredG' => '70',
        
    ],
    
];
        
    
?> 




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-1</title>

   
</head>
<body>
    <h1>partite giornata 13</h1>

    <?php for($i = 0; $i < count($basketMatches); $i++) { ?>
        <?php $this_array = $basketMatches[$i]; ?>
        <h2>
            <?php echo $this_array['HomeTeamName'] ?>
            -
            <?php echo $this_array['guestTeamName'] ?>
            |
            <?php echo $this_array['pointScoredH'] ?>
            -
            <?php echo $this_array['pointScoredG'] ?>
        </h2>
        
        
    <?php } ?>
    
</body>
</html>