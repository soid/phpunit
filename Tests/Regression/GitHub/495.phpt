--TEST--
GH-495: --filter option for filtering testsuites
--FILE--
<?php

$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--filter';
$_SERVER['argv'][] = 'Child1';
$_SERVER['argv'][] = 'ParentSuite';
$_SERVER['argv'][] = dirname(__FILE__).'/495/ParentSuite.php';

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/PHPUnit/Autoload.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit @package_version@ by Sebastian Bergmann.

F

Time: 0 seconds, Memory: 4.50Mb

There was 1 failure:

1) OneTest::testSomething
Failed asserting that false is true.

/Users/gtemchenko/Desktop/Temp/phpunit_my/Tests/Regression/GitHub/495/OneTest.php:9
/Users/gtemchenko/Desktop/Temp/phpunit_my/Tests/Regression/GitHub/495.php:10

FAILURES!
Tests: 1, Assertions: 1, Failures: 1.
