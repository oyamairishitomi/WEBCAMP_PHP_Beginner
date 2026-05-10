<?php
$f = [0,1];
$i = 2;

while ($f[$i-1]<10000){
  $f[$i] = $f[$i-2] + $f[$i-1];
  $i++;
}

foreach ($f as $v) {
  echo $v . "\n";
}