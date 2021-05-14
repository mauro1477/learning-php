<?php
  $min = 1;
  $max = 50;
  // $guess = -1;
  $guess = rand($min,$max);
  $num = 16;

  if($guess < $min || $guess > $max){
    echo 'Guess is out of range!';
    exit();
  }

  if($guess == $num){
    echo 'Thats correct';
  } elseif($guess < $num){
    echo 'Guess is to low';
  } elseif($guess > $num){
    echo 'Guess is to high';
  }


?>
