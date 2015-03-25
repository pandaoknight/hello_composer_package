<?php
namespace pandaoknight\hello_composer_package;

#TRIC: 在项目模式下和vendor模式下都能加载到autoload.php
$project_mode_path = "/../vendor/autoload.php";
$vendor_mode_path = "/../../../autoload.php";
if(@include_once(__DIR__ . $project_mode_path)){
    #print "[OK] 项目模式...\n";
}elseif(@include_once(__DIR__ . $vendor_mode_path)){
    #print "[OK] Vendor模式...\n";
}else{
    print "[Fail] $project_mode_path, $vendor_mode_path 均未找到composer的autoload.php。\n";
    die(-1);
}
#

require_once(__DIR__ . "/hello/Hello.class.php");

use pandaoknight\hello_composer_package\hello\Hello as Hello;


$hello_obj = new Hello("Panda");
#$hello_obj = new hello\Hello("Panda");
$hello_obj->hello();
?>
