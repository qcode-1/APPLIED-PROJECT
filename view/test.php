<?php

date_default_timezone_set('UTC');

// $date1 = date_create("2018-04-23");

// $date2 = date_create("2013-12-12");

// $diff = date_diff($date1,$date2);

// echo $diff;

$date2 = date("Y-m-d");
$date1 = "2018-04-23";

$diff = abs(strtotime($date2) - strtotime($date1));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$day = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

printf($day);

?>