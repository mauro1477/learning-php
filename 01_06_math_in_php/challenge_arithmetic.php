
<?php
/**
 * Write equations that evaluate the following:
 * (14 + 82 - 32 / 2)^2
 * 18 x (3 ÷ 6 -9) x 10
 * 5x (12 ÷2 -8 x 4 +12x6)
 *
 * Be sure to use additional parentesis to get the right results!
 */

 $stack = array();
 array_push($stack,(14+82-32/2)**2);
 array_push($stack, 18*(3/6-9)*10);
 array_push($stack, 5*((12/2)-(8*4)+(12*6)));
 print_r($stack);
 echo '<br>';

 echo (15%12)**2;
 echo '<br>';
 echo (15%12);
 echo '<br>';
 $a = 2;
 echo ++$a + --$a;
?>
