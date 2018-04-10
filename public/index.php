<?php

require "../vendor/autoload.php";

use \src\wcs\Hello;
use \HelloWorld\SayHello;

$hello = new Hello();

echo SayHello::world();