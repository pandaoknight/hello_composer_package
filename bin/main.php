<?php
namespace pandaoknight\hello_composer_package;

require_once(__DIR__ . "/hello/Hello.class.php");

use pandaoknight\hello_composer_package\hello\Hello as Hello;


$hello_obj = new Hello("Panda");
#$hello_obj = new hello\Hello("Panda");
$hello_obj->hello();
?>
