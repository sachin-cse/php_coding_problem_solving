<?php
function is_empty($str){
    return strlen($str)>0?"true":"false";
}
echo is_empty(" ");
?>