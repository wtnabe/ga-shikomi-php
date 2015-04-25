<?php
namespace GAShikomi\Subcommand;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * for Config class
 */
class TestingSegmentsCommand extends \GAShikomi\Subcommand\Base
{
    function configure() {
        parent::configure();
        $this->setName('testing:segments');
    }

    function initialize(InputInterface $input, OutputInterface $output)
    {
        $this->config = new \GAShikomi\Config($input);
        $this->api    = new \GAShikomi\Api($this->config);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
