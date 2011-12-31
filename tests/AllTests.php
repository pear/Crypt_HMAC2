<?php

if (!defined('PHPUnit_MAIN_METHOD')) {
    define('PHPUnit_MAIN_METHOD', 'Crypt_HMAC2_AllTests::main');
}

if ($fp = @fopen('PHPUnit/Autoload.php', 'r', true)) {
    require_once 'PHPUnit/Autoload.php';
} elseif ($fp = @fopen('PHPUnit/Framework.php', 'r', true)) {
    require_once 'PHPUnit/Framework.php';
    require_once 'PHPUnit/TextUI/TestRunner.php';
} else {
    die('skip could not find PHPUnit');
}
fclose($fp);

require_once dirname(__FILE__) . '/HMAC2Test.php';

class Crypt_HMAC2_AllTests
{
    public static function main()
    {
        $parameters = array();

        if (TESTS_GENERATE_REPORT && extension_loaded('xdebug')) {
            $parameters['reportDirectory'] = TESTS_GENERATE_REPORT_TARGET;
        }
        PHPUnit_TextUI_TestRunner::run(self::suite(), $parameters);
    }

    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('PEAR - Crypt_HMAC2');

        $suite->addTestSuite('Crypt_HMAC2Test');

        return $suite;
    }
}

if (PHPUnit_MAIN_METHOD == 'Crypt_HMAC2_AllTests::main') {
    Crypt_HMAC2_AllTests::main();
}
