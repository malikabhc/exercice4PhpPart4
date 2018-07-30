<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3/4</title>
  </head>
  <body>
    <p>
      <?php
        function numbers($number1, $number2){
          if ($number1 > $number2) {
            return 'Le premier nombre est plus grand';
          } elseif ($number1 < $number2) {
            return 'Le premier nombre est plus petit';
          } else {
            return 'Les deux nombres sont identiques';
          }
        }
        echo numbers(27, 11);
      ?>
    </p>
  </body>
</html>
