<?php
namespace pandaoknight\hello_composer_package\hello;

#include_once(__DIR__ . "/../../vendor/autoload.php");
use Identicon\Identicon;


class Hello{
    protected $_name;

    public function __construct($name){
        $this->_name = $name;
    }

    public function hello(){
        print "Hello, " . $this->_name . "\n";
    }

    public function getName(){
        return $this->_name;
    }

    public function genIdenticon($name){
        $id = new Identicon();
        return $id->getImageDataUri($name);
    }
}
?>
