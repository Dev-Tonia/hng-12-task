<?php

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/') {
    include 'api/details.php';
} else {
    include 'api/404.php';
}
