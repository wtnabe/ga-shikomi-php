<?php
namespace GAShikomi\Subcommand;

require_once 'base.php';

class DimensionsCommand extends Base
{
    protected function configure() {
        parent::configure();
        $this->setName('dimensions')
            ->setDescription('display dimensions')
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
