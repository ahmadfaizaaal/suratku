<?php
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', '/var/www/html/suratku/php_error.log');

error_log("Tes error log manual!");
trigger_error("Ini adalah error buatan!", E_USER_ERROR);
?>


