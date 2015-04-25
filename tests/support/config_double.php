<?php
namespace GAShikomi\Tests;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

trait ConfigDouble
{
    /**
     * @param  array  $opts
     * @return object
     */
    function config($opts = null) {
        $opts = $opts ? $opts : array();

        $application = new Application();
        $command     = $application->add(new \GAShikomi\Subcommand\TestingSegmentsCommand());
        (new CommandTester($application->find('testing:segments')))->execute($opts);

        return $command->config;
    }

    /**
     * @return array
     */
    function optionWithConfigFile() {
        return array('command' => 'segments',
                     '--config-file' => dirname(__FILE__).'/support/sample.yml');
    }

    /**
     * @return array
     */
    function optionWithCredentialStore()
    {
        return array('command' => 'segments',
                     '--credential-store' => dirname(__FILE__));
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
