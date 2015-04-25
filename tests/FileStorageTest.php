<?php
namespace GAShikomi\Tests;

require_once 'test_helper.php';

use GAShikomi\FileStorage;

class FileStorageTest extends \PHPUnit_Framework_TestCase
{
    use ConfigDouble;

    function testSecretsWithEmptyOption()
    {
        $this->assertEquals(str_replace('tests/../', '', dirname(__FILE__).'/../client_secrets.json'),
                           (new FileStorage($this->config()))->secrets);

    }

    function testCredentialExistsWithValidOption()
    {
        $this->assertTrue((new FileStorage($this->config($this->optionWithCredentialStore())))->credentialExists());
    }

    function testCredentialEmptyWithValidOption()
    {
        $this->assertTrue((new FileStorage($this->config($this->optionWithCredentialStore())))->credentialEmpty());
    }

    function testSecretsEmptyWithValidOption()
    {
        $this->assertFalse((new FileStorage($this->config($this->optionWithCredentialStore())))->secretsEmpty());
    }

    function testSecretsExistsWithEmptyOption()
    {
        $this->assertFalse((new FileStorage($this->config($this->optionWithCredentialStore())))->secretsExists());
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
