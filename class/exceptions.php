
<?php
/*
*   Test exceptions en PHP
*
*   https://www.php.net/manual/en/language.exceptions.php
*/

// Chaque bloc 'TRY' doit avoir au moins un bloc 'CATCH' ou un bloc 'FINALLY' correspondant.

$test1 = 1;
$test2 = 2;

try {
    echo ( $test1 / ($test1 - $test1));
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
