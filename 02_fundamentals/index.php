<?php


/* 
## Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array ( tappa ) avrà:
- una squadra di casa 
- una squadra ospite
- punti fatti dalla squadra di casa 
- punti fatti dalla squadra ospite. 

Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60

*/

$matches = [
  [
    "home_team" => 'Team A',
    "guest_team" => 'Team B',
    "home_team_score" => '20',
    "guest_team_score" => '30',
  ],
  [
    "home_team" => 'Team C',
    "guest_team" => 'Team D',
    "home_team_score" => '20',
    "guest_team_score" => '30',
  ],
  [
    "home_team" => 'Team E',
    "guest_team" => 'Team F',
    "home_team_score" => '20',
    "guest_team_score" => '30',
  ],
  [
    "home_team" => 'Team G',
    "guest_team" => 'Team H',
    "home_team_score" => '20',
    "guest_team_score" => '30',
  ]
];



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basket matches</title>
</head>

<body>


  <?php foreach ($matches as $match) : ?>

    <p>
      <?= $match['home_team'] ?>-<?= $match['guest_team'] ?> | <?= $match['home_team_score'] ?> - <?= $match['guest_team_score'] ?>
    </p>

  <?php endforeach; ?>


</body>

</html>