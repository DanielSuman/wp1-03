*<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

  // r
  $r = rand(1,100);

  // PI
  define('PI', 3.14);
  // obsah kruhu (S = PÍ r2)
  $area = r * r * pi;

  //Obvod kruhu o = 2 PÍ R
  $circuit = PI + PI * r / 2;

    ?>

    <p>r = <?= $number1 ?> cm </p>
<p>Obvod kruhu je <?= pi ?> + <?= pi ?> * <?= r ?> / <?= 2 ?> = <?= $circuit ?> cm </p>
<p>Obsah kruhu je <?= r ?> * <?= r ?> * <?= pi ?> = <?= $area ?> cm </p>
</body>
</html>