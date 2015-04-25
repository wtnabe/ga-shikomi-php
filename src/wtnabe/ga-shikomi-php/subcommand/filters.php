<?php
namespace GAShikomi\Subcommand;

require_once 'base.php';

class FiltersCommand extends Base
{
    protected function configure() {
        parent::configure();
        $this->setName('filters')
            ->setDescription('display filters (with profile)')
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
