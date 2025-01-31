<?php

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/') {
    include __DIR__ . '/details.php';
} else {
    include __DIR__ . '/404.php';
}
