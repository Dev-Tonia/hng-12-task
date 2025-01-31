<?php

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/') {
    include './details.php';
} else {
    include './404.php';
}
