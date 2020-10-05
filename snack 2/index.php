<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

// Controllo che i valori NAME, MAIL ed AGE passati non siano vuoti.
if (!empty($_GET["name"])) {
  // Se non lo sono, li salvo in una variabile
  $name = $_GET["name"];
  var_dump($name);
} else {
  // Altrimenti stampo un messaggio di errore a schermo
  echo "Non hai inserito il tuo nome <br>";
}

if (!empty($_GET["mail"])) {
  $mail = $_GET["mail"];
  var_dump($mail);
} else {
  echo "Non hai inserito il tuo indirizzo email <br>";
}

if (!empty($_GET["age"])) {
  $age = intval($_GET["age"]);
  var_dump($age);
} else {
  echo "Non hai inserito la tua età";
}

// Controllo che:
// Il nome abbia più di 3 caratteri
// La mail contenga "@" e "."
// L'eta sia un numero (e sia maggiore di 0)

if ((strlen($name) > 3) && (strpos($mail, "@") !== false && strpos($mail, ".") !== false) && is_int($age) && ($age != 0)) {
  // Se è tutto verificato:
  $messaggio = "Accesso Riuscito. Benvenuto!";
} else {
  // Se c'è un errore:
  $messaggio = "Accesso Negato. Inserisci nuovamente i tuoi dati.";
}

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Snack 2</title>
     <h1><?php echo $messaggio ?></h1>
   </head>
   <body>

   </body>
 </html>
