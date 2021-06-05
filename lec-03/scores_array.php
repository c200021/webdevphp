<?php
$scores = [];  // 点数を格納する配列を初期化：「array()」は使用しない
$scores[0] = 81; // 国語
$scores[1] = 79; // 数学
$scores[2] = 78; // 英語
$scores[3] = 74; // 社会
$scores[4] = 80; // 理科
$total = $scores[0];
$total += $scores[1];
$total += $scores[2];
$total += $scores[3];
$total += $scores[4];
$average = $total / count($scores);
echo "合計：{$total}点<br />";
echo "平均点：{$average}点<br />";
?>