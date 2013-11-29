<?php

$age = 16;

try {
    if ($age > 18) {
        echo 'Old enough';
    } else {
        throw new Exception('Not old enough.');
    }
} catch (Exception $exc) {
    echo 'Error: '.$exc->getMessage();
}

/* Output
Error: Not old enough.
*/
?>
