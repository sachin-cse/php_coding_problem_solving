<?php
function isValidPhoneNumber($phoneNumber) {
    if (strlen($phoneNumber) !== 14) {
        return false;
    }
    
    if ($phoneNumber[0] === '(' && 
        is_numeric($phoneNumber[1]) &&
        is_numeric($phoneNumber[2]) &&
        is_numeric($phoneNumber[3]) &&
        $phoneNumber[4] === ')' &&
        $phoneNumber[5] === ' ' &&
        is_numeric($phoneNumber[6]) &&
        is_numeric($phoneNumber[7]) &&
        is_numeric($phoneNumber[8]) &&
        $phoneNumber[9] === '-' &&
        is_numeric($phoneNumber[10]) &&
        is_numeric($phoneNumber[11]) &&
        is_numeric($phoneNumber[12]) &&
        is_numeric($phoneNumber[13])) {
            
        return true;
    }

    return false;
}

// Example usage:
$phone1 = "(123) 456-7890"; // valid
$phone2 = "123-456-7890";   // invalid
$phone3 = "(123)456-7890";  // invalid
$phone4 = "(123) 456-789";  // invalid

echo isValidPhoneNumber($phone1) ? 'true' : 'false'; // true
echo isValidPhoneNumber($phone2) ? 'true' : 'false'; // false
echo isValidPhoneNumber($phone3) ? 'true' : 'false'; // false
echo isValidPhoneNumber($phone4) ? 'true' : 'false'; // false
?>
