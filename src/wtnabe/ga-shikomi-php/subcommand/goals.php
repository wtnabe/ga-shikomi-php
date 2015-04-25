<?php
namespace GAShikomi\Subcommand;

require_once 'base.php';

class GoalsCommand extends Base
{
    protected function configure()
    {
        parent::configure();
        $this->setName('goals')
            ->setDescription('display goals (with profile)')
            ->addOption('account-id',
                        null,
                        \Symfony\Component\Console\Input\InputOption::VALUE_REQUIRED)
            ->addOption('property-id',
                        null,
                        \Symfony\Component\Console\Input\InputOption::VALUE_REQUIRED)
            ->addOption('profile-id',
                        null,
                        \Symfony\Component\Console\Input\InputOption::VALUE_REQUIRED);
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
