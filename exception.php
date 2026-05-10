<?php

try {
  throw new \Exception("自力でなげた例外");

  $obj = new SplFileObject('dummy');

  echo "例外が起きた時の処理・ここは通る？ \n";
  
} catch (\Throwable $e) {
  echo "例外が発生したらここを通る \n";
  var_dump($e->getMessage());
}

echo "fin. \n";