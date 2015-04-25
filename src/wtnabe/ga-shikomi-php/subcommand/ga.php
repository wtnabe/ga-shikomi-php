<?php
namespace GAShikomi\Subcommand;

require_once 'base.php';

class GaCommand extends Base
{
    protected function configure() {
        parent::configure();
        $this->setName('ga')
            ->setDescription('fetch and display ga data with profile')
            ->addOption('profile-id',
                        null,
                        \Symfony\Component\Console\Input\InputOption::VALUE_REQUIRED)
            ->addOption('start-date',
                        null,
                        \Symfony\Component\Console\Input\InputOption::VALUE_REQUIRED)
            ->addOption('end-date',
                        null,
                        \Symfony\Component\Console\Input\InputOption::VALUE_REQUIRED)
            ->addOption('metrics',
                        null,
                        \Symfony\Component\Console\Input\InputOption::VALUE_OPTIONAL,
                        '',
                        'ga:pageviews,ga:users');
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
