<?php

$i = random_int(1, 999);
$j = random_int(1,999);

$k = $i + $j;
echo "{$i} + {$j} = {$k} \n";


// 剰余
$k = $i % $j;
// 結果の出力
echo "{$i} % {$j} = {$k} \n";

// 冪乗：**を使う書き方
$k = $i ** 3;
// 結果の出力
echo "{$i} ** 3 = {$k} \n";

// 冪乗：powを使う書き方
$k = pow($i, 3);
// 結果の出力
echo "pow({$i}, 3) = {$k} \n";