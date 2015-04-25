<?php
namespace GAShikomi\Runner;

require_once 'base.php';

class GoalsRunner extends Base
{
    /**
     * @param  InputOption $input
     * @return object
     */
    function run($input)
    {
        $o = $this->api->config->options;

        return $this->api->analytics->management_goals->listManagementGoals($o['account-id'], $o['property-id'], $o['profile-id']);
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
