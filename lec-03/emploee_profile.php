<?php
$profiles = [];
$profile = [];
$profile["id"] = "00011";     
$profile["name"] = "田中一郎";    
$profile["department"] = "人事部";
$profile["email"] = "00011@sample.com";
$profiles[] = $profile;
$profile["id"] = "00012";     
$profile["name"] = "山本ゆかり";    
$profile["department"] = "開発部";
$profile["email"] = "北海道";
$profiles[] = $profile;
echo "<pre>";
var_dump($profiles);
echo "</pre>";
?>
