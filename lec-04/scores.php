<?php
$scores = [];
$scores["language"] = 81; // 国語
$scores["math"] = 79; // 数学
$scores["english"] = 78; // 英語
$scores["society"] = 74; // 社会
$scores["science"] = 80; // 理科
foreach ($scores as $key => $value) {
echo "{$key}：{$value}<br />";
};
?>