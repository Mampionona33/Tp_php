<?php
$url =  isset($_SERVER['HTTPS']) &&
    $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";
$url .= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$base_url = 'http://localhost/tp_php/detail_php/id';
parse_str($url, $output);

$id = $output[$base_url];