<!-- SNACK 1
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php

// Definisco un array di partite di Basket
$matches = [
  [
    "squadra di casa" => "Virtus Bologna",
    "squadra ospite" => "Cremona",
    "punti squadra di casa" => 48,
    "punti squadra ospite" => 58
  ],
  [
    "squadra di casa" => "Fortitudo Bologna",
    "squadra ospite" => "Trento",
    "punti squadra di casa" => 44,
    "punti squadra ospite" => 53
  ],
  [
    "squadra di casa" => "Roma",
    "squadra ospite" => "Sassari",
    "punti squadra di casa" => 54,
    "punti squadra ospite" => 49
  ],
  [
    "squadra di casa" => "Trieste",
    "squadra ospite" => "Olimpia Milano",
    "punti squadra di casa" => 55,
    "punti squadra ospite" => 60
  ],
  [
    "squadra di casa" => "Venezia",
    "squadra ospite" => "Pesaro",
    "punti squadra di casa" => 44,
    "punti squadra ospite" => 58
  ],
  [
    "squadra di casa" => "Reggiana",
    "squadra ospite" => "Brindisi",
    "punti squadra di casa" => 57,
    "punti squadra ospite" => 52
  ],
  [
    "squadra di casa" => "Treviso",
    "squadra ospite" => "Brescia",
    "punti squadra di casa" => 41,
    "punti squadra ospite" => 47
  ],
  [
    "squadra di casa" => "Varese",
    "squadra ospite" => "Cantù",
    "punti squadra di casa" => 61,
    "punti squadra ospite" => 59
  ]
];

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Snack 1</title>
    <h1>Calendario Partite Lega A Basket</h1>
    <ul class="matches-list">
      <?php
      for ($i = 0; $i < count($matches); $i++) {
        // Per ogni partita, salvo il valore dell'array corrente in una variabile
        $match = $matches[$i];
        // e stampo una stringa col formato <li> (Sq. di casa) - (Sq. ospite) | (punt. sq. di casa) - (punt. sq. ospite) </li>
        echo "<li>" . $match["squadra di casa"] . " - " . $match["squadra ospite"] . " | " . $match["punti squadra di casa"] . " - " . $match["punti squadra ospite"] . "</li>";
      }
      ?>
    </ul>
  </head>
  <body>

  </body>
</html>
