<?php

    //Image class test suite with autorun

    define('TEST_BASE', dirname(__FILE__));
    define('SIMPLETEST_BASE', TEST_BASE.DIRECTORY_SEPARATOR.'simpletest');
    define('IMAGE_BASE', TEST_BASE.DIRECTORY_SEPARATOR.'..');

    require_once SIMPLETEST_BASE.DIRECTORY_SEPARATOR.'unit_tester.php';
    require_once SIMPLETEST_BASE.DIRECTORY_SEPARATOR.'autorun.php';
