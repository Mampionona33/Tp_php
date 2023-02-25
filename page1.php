<?php

function ajouteMAJ($ch1, $ch2, $ch3)
{
    return strtoupper($ch1) . " " . strtoupper($ch2) . " " . strtoupper($ch3);
};

$val = ajouteMAJ("test", "fdfsfs", "dfsfs");

echo '$val: ' . $val;