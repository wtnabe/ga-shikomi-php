<?php
namespace GAShikomi\Subcommand;

require_once 'base.php';

class MetricsCommand extends Base
{
    protected function configure()
    {
        parent::configure();
        $this->setName('metrics')
            ->setDescription('display metrics')
            ->addOption('include-deprecated',
                        null,
                        \Symfony\Component\Console\Input\InputOption::VALUE_NONE);
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
