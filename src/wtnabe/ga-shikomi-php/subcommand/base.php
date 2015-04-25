<?php
namespace GAShikomi\Subcommand;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use GAShikomi\Renderer;

class Base extends \Symfony\Component\Console\Command\Command
{
    /**
     * GAShikomi\Api
     *
     * @var object
     */
    var $api    = null;
    /**
     * GAShikomi\Config
     *
     * @var object
     */
    var $config   = null;

    protected function configure()
    {
        $this->setCommonOptions();
    }

    function setCommonOptions()
    {
        foreach ( $this->commonOptions() as $opt ) {
            call_user_func_array(array($this, 'addOption'), $opt);
        }
    }

    /**
     * @return array
     */
    function commonOptions()
    {
        return 
            array(array('config-file',      null, InputOption::VALUE_OPTIONAL),
                  array('credential-store', null, InputOption::VALUE_OPTIONAL),
                  array('format',           null, InputOption::VALUE_OPTIONAL),
                  array('with-csv-header',  null, InputOption::VALUE_NONE));
    }

    /**
     * like before filter of execute()
     *
     * @param InputInterface  $input
     * @param OutputInterface $output
     */
    function initialize(InputInterface $input, OutputInterface $output)
    {
        $this->config   = new \GAShikomi\Config($input);
        $this->api      = new \GAShikomi\Api($this->config);
        $this->api->_auth();
        $this->api->_init_service();
        $this->renderer = new \GAShikomi\Renderer();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $runner = str_replace(array('Subcommand', 'Command'), 'Runner', get_class($this));
        Renderer::factory($this, (new $runner($this->api))->run($input))->renderTo($output);
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
