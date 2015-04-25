<?php
namespace GAShikomi\Subcommand;

require_once 'base.php';

class PropertiesCommand extends Base
{
    protected function configure()
    {
        parent::configure();
        $this->setName('properties')
            ->setDescription('display properties')
            ->addOption('account-id',
                        null,
                        \Symfony\Component\Console\Input\InputOption::VALUE_REQUIRED);
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
