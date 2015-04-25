<?php
namespace GAShikomi\Subcommand;

require_once 'base.php';

class ProfilesCommand extends Base
{
    protected function configure()
    {
        parent::configure();
        $this->setName('profiles')
            ->setDescription('display profiles (with property)')
            ->addOption('account-id',
                        null,
                        \Symfony\Component\Console\Input\InputOption::VALUE_REQUIRED)
            ->addOption('property-id',
                        null,
                        \Symfony\Component\Console\Input\InputOption::VALUE_REQUIRED);
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
