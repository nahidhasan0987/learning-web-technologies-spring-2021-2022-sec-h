<?php
function largest($x, $y, $z) {
  $max = $x;

  if ($x >= $y && $x >= $z)
    $max = $x;
  if ($y >= $x && $y >= $z)
    $max = $y;
  if ($z >= $x && $z >= $y)
    $max = $z;
  
  echo "Largest number among $x, $y and $z is: $max\n";
}

largest(13, 11, 98);
largest(23, 4, 20);
?>