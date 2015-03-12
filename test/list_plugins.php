<?php

    define('TEST_BASE', dirname(__FILE__));
    define('SIMPLETEST_BASE', TEST_BASE.DIRECTORY_SEPARATOR.'simpletest');
    define('IMAGE_BASE', TEST_BASE.DIRECTORY_SEPARATOR.'..');
    
    require_once IMAGE_BASE."/image/image.inc.php";

    $classes = get_declared_classes();

    foreach ($classes as $class) {
    
        $interfaces = class_implements($class);
    
        if (in_array("image_plugin", $interfaces)) {
        
            //echo $class."<br>";
            $c = new $class;
            echo $c->getTypeId().".".$c->getSubTypeId()." version ".$c->getVersion()."<br>";

        }
    
    }
