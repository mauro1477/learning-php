<?php
//match is only available for php 8
  $turtle = "don";
  $return_value = match ($turtle) {
      "don" => "red",
      default => "blue",
  };
  echo $return_value;

  $x = 0;

  $result = match($x){
    -1, -2,0 => '$x is negative or zero',
    1 => '$x is 1',
    2 => '$x is 2',
    3 => '$x is 3',
    default => '$x is neither 1,2 nor 3',
  };
  echo '<br>';
  echo $result;


  $num = match(true){
    $x <= 0 => '$x is zero',
    $x == 1 => '$x is 1',
    $x == 2 => '$x is 2',
  };
  echo '<br>';
  echo $num;

  $turtle = 'leo';
  $bandana= match($turtle){
    'leo'=>'blue',
    'raph' => 'red',
    'mike' => 'orange',
    'don' => 'purple',
  };
  echo '<br>';
  echo $bandana;


  
?>
