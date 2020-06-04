<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title></title>
</head> 
      <body>
    
<?php

$age = 16

/*
if($age > 15) {
    $enteryFee = 100;
} else {
    $enteryFee = 50;
}
*/

if (($age <= 15) || ($age >= 65)) {
    $enteryFee = 50;
} else {  
    $enteryFee = 100;
}

?>
<p> Because of your age <?= $age?>, so u gona pay for the entry fee <?= $entryFee ?> Czk. </p>

      </body>
</html>