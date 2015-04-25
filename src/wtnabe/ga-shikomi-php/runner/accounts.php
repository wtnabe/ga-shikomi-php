<?php
namespace GAShikomi\Runner;

require_once 'base.php';

class AccountsRunner extends Base
{
    /**
     * @param  InputOption $input
     * @return object
     */
    function run($input)
    {
        return $this->api->analytics->management_accounts->listManagementAccounts();
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
