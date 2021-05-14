<?php
  $a = 9 > 5;//True
  $b = 10 != 10;//False
  $c = $a && $b;//False
  $d = $a || $b;//True
  $e = $b && $c;//False
  $f = $a || $d;//True

  $logic = array($a, $b, $c, $d, $e, $f);
  echo '<pre>';
  var_dump($logic);
  echo '</pre>';

  $g = $a and $b;
  echo var_dump($g);
  echo '<br>';
  $g = $a && $b;
  echo var_dump($g);
?>
