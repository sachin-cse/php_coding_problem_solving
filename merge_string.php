<?php
$word1 = 'abc';
$word2 = 'pqr';

$merged = '';
$length = max(strlen($word1), strlen($word2));
$word_letter1 = str_split($word1);
$word_letter2 = str_split($word2);
for($i=0; $i<$length; $i++){
    $merged .= $word_letter1[$i];
    $merged .= $word_letter2[$i];
}

echo $merged;
?>