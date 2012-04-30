<?php
require_once 'Child1Suite.php';
require_once 'Child2Suite.php';

class ParentSuite
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Parent');
        $suite->addTest(Child1Suite::suite());
        $suite->addTest(Child2Suite::suite());

        return $suite;
    }
}
