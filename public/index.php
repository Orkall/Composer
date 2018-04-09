<?php


require "../vendor/autoload.php";

use \src\Wcs\Hello;
use \HelloWorld\SayHello;
$hello = new Hello();
echo $hello->talk();
echo SayHello::world();