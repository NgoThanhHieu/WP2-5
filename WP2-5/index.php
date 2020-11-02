<?php
$i ;
$runner[0] = "Martin Kokeš";
$runner[1] = "Sorin Eni";
$runner[2] = "Jan Hladík";
$runner[3] = "Štěpán Kolarovský";
$runner[4] = "Martin Lédl";
$runner[5] = "Karel Nakládal";
$runner[6] = "Than Hieu Ngo";
$runner[7] = "Michal Plaček";
$runner[8] = "Libor Pluháček";
$runner[9] = "Šimon Sixta";
$runner[10] = "Jakub Vávrů";
$runner[11] = "Jan Šlechta";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($i=0; $i < 11 ; $i++) {  ?>
        Místo <?= $i + 1 ?>. <?= $runner[$i] ?> <br>
        <?php
    }

    ?>


</body>
</html>