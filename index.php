<?php
require "vendor/autoload.php";
use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';

$blade = new BladeOne($views,$cache); // MODE_DEBUG allows to pinpoint troubles.
echo $blade->run("main",array("pagetitle"=>"Главная"));
?>