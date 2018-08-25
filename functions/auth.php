<?php

require('https.php');

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="ABCruise"');
    header('HTTP/1.0 401 Unauthorized');
    die('Unable to authorize');
} elseif ($_SERVER['PHP_AUTH_USER'] != 'abcruiseadmin' || $_SERVER['PHP_AUTH_PW'] != 'lXsbej3_rE3g') {
    header('HTTP/1.0 401 Unauthorized');
    die("Unable to authorize");
}