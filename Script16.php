<?php
$sentence = "Hello World!";
$vowelsCount = preg_match_all('/[aeiouAEIOU]/', $sentence);
echo "Number of vowels: " . $vowelsCount;
?>