<?php
//Run this script every 2 min to set online
$token='your_bns_token';
$id='your_bns_id';
file_get_contents('https://somecrap.ru/bns/checker.php?id='.$id.'&token='.$token);
?>
