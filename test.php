<?php
$secretmessage1 = '0@sn9sirppa@#?ia’jgtvryko1';
$lengh = strlen($secretmessage1);
$keyNumber = $lengh / 2;
$firstdecrypt = substr($secretmessage1, 6, $keyNumber);
$seconddecrypt = str_replace('@#?', ' ',  $secretmessage1);
$finaldecrypt = strrev($seconddecrypt);
echo $finaldecrypt;

$secretmessage2 = 'q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj';
$lengh = strlen($secretmessage2);
$keyNumber = $lengh / 2;
$firstdecrypt = substr($secretmessage2, 6, $keyNumber);
$seconddecrypt = str_replace('@#?', ' ',  $secretmessage2);
$finaldecrypt = strrev($seconddecrypt);
echo $finaldecrypt;

$secretmessage3 = 'aopi?sgnirts@#?sedhtg+p9l!';
$lengh = strlen($secretmessage3);
$keyNumber = $lengh / 2;
$firstdecrypt = substr($secretmessage3, 6, $keyNumber);
$seconddecrypt = str_replace('@#?', ' ',  $secretmessage3);
$finaldecrypt = strrev($seconddecrypt);
echo $finaldecrypt;
?>