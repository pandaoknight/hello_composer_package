<?php
namespace pandaoknight\hello_composer_package;

require_once(__DIR__ . "/hello/Hello.class.php");


$hello_obj = new hello\Hello("Panda");
$hello_obj->hello();


?>
