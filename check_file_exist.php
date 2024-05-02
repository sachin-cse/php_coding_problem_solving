<?php
if(!file_exists('geeks.txt')){
    die('Stop');
} else {
    $file = fopen('geeks.txt', 'w');
}
echo "Hi";
?>