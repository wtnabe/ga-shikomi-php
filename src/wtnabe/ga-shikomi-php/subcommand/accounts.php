<?php
namespace GAShikomi\Subcommand;

require_once 'base.php';

class AccountsCommand extends Base
{
    protected function configure()
    {
        parent::configure();
        $this->setName('accounts')
            ->setDescription('display accounts');
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
