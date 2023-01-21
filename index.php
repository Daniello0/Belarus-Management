<?php
$file = file_get_contents("https://api.csgorun.ru/current-state?montaznayaPena=null");
json_decode($file);
echo "<pre>";
print_r($file);