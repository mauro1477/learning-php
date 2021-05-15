<?php

  $current_num = 1;
  $prev_num = 0;
  $next = null;
  $squence = '';

  while($current_num < 200){
    $squence .= $current_num . ',';
    $next = $current_num + $prev_num;
    echo $current_num . '<br>';
    $prev_num = $current_num;
    $current_num = $next;
  };
  $squence = trim($squence);// Remove white space after before and after string
  $squence= substr($squence, 0, strlen($squence) -1); // Make a new string without the last index of the substring
  echo '<br>';
  echo $squence;

?>
