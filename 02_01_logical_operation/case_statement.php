<?php
  $total = 10;
  switch($total){
    case 1:
      echo '$total is 1';
      break;
    case 2:
      echo '$total is 2';
    case 3:
      echo '$total is 3';
    default:
      echo '$total is more than 3';
  }

  $turtle = 'leo';
  $bandana = '';
  switch($turtle){
    case 'leo':
      $bandana = 'blue';
      break;
    case 'ralph':
      $bandana = 'red';
      break;
    case 'mike':
      $bandana = 'orange';
      break;
    default:
      $bandana = 'white';
      break;
  }
  echo '<br>';
  echo $bandana;
?>
