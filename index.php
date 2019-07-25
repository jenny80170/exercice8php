<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice 8</title>
</head>
<body>
  <h1>Créer 2 fonctions contenant des nombre et créer une fonction qui retourne leur
  multiplication et afficher le résultat
</h1>
  <?php
  $number1 = 12;
  echo 'mon nombre est 12 ';
  $number2 = 28;
  echo 'mon nombre est 28 ';
  function multipliNumber($string, $string2){
    $result = $string * $string2;
    return $result;
  }
  echo multipliNumber($number1, $number2);
  ?>
</body>
</html>
