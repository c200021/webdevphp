<?php
$scores = [];
$scores[0] = 81;
$scores[1] = 79;
$scores[2] = 78;
$scores[3] = 74;
$scores[4] = 80;
if ($scores[2] >= 80) {
    echo "たいへんよくできました";
} elseif ($scores[2] >= 60) {
    echo "よくできました";
} else {
    echo "がんばりましょう";
}
?>