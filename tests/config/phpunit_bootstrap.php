<?php
error_reporting(E_ALL | E_STRICT);
// Ensure that composer has installed all dependencies
if (!file_exists('composer.lock')) {
    die("Dependencies must be installed using composer:\n\nphp composer.phar install --dev\n\n"
        . "See http://getcomposer.org for help with installing composer\n");
}

include 'vendor/autoload.php';
