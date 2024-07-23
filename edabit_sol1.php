<?php
function stringOperation($val){
    try{
        if(!empty($val)){
            return eval('return ' . $val . ';');
        }else{
            throw new Exception('Please provide a valid value');
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }
}

echo stringOperation('1+1;');
echo stringOperation('1+1+1;');


?>