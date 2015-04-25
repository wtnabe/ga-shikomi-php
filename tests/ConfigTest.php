<?php
namespace GAShikomi\Tests;

require_once 'test_helper.php';

class ConfigTest extends \PHPUnit_Framework_TestCase {
    use ConfigDouble;

    function testConfigFile()
    {
        $this->assertStringEndsWith('.yml', $this->config($this->optionWithConfigFile())->configFile());
    }

    function testYamlWithEmptyArguments()
    {
        $this->assertEquals(array(), $this->config(array())->yaml);
    }

    function testCredentialStoreWithEmptyArguments()
    {
        $this->assertEquals(realpath(dirname(__FILE__).'/../'),
                            $this->config(array())->credentialStore());
    }

    function testCredentialStoreWithSpecifiedDir()
    {
        $dir = __DIR__;
        $this->assertEquals($dir,
                            $this->config(array('--credential-store' => $dir
                                                ))->credentialStore());
    }

    function testFormatWithEmptyArguments()
    {
        $this->assertEquals('original', $this->config(array())->format());
    }

    function testFormatWithSpecifiedString()
    {
        $this->assertEquals('csv', $this->config(array('--format' => 'csv'))->format());
    }

    function testWithCsvHeaderWithEmptyArguments()
    {
        $this->assertFalse($this->config(array())->withCsvHeader());
    }

    function testWithCsvHeaderWithTrueOption()
    {
        $this->assertTrue($this->config(array('--with-csv-header' => null))->withCsvHeader());
    }
 }

/*
Local Variables:
c-basic-offset: 4
End:
*/
