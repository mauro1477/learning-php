
<?php
  for($i = 10; $i > 1; $i--){
    echo $i . '<br>';
  }
  exit();
?>
<?php
  $rappers = array('tupac', 'big smalls', 'Jay z', 'slim shady');
  foreach($rappers as $rapper){
      echo $rapper . '<br>';
  };

  $home_towns = array(
      'Joe' => 'Middletown, NY',
      'Erin' => 'West Chester, PA',
      'Dave' => 'Exton, PA',
      'Brian' => 'Grand Rapids, MI',
  );

  foreach($home_towns as $name => $town){
    echo $name . ' lives in ' . $town .'<br>';
  }
?>

<?php
  $rappers = array('tupac', 'big smalls', 'Jay z', 'slim shady');

  for($i = 0; $i < sizeof($rappers); $i++){
    echo $rappers[$i]. '<br>';
  };

?>

<?php
  $x = 0;
  while($x < 10){
    echo $x . '<br>';
    $x++;
  }

?>
<?php
  $i = 0;
  do{
    echo '<br>' . $i ;
    $i++;
  }while($i <= 10);


?>
