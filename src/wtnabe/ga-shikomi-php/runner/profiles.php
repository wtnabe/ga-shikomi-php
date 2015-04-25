<?php
namespace GAShikomi\Runner;

require_once 'base.php';

class ProfilesRunner extends Base
{
    /**
     * @param  InputOption $input
     * @return object
     */
    function run($input)
    {
        $o = $this->api->config->options;

        return $this->api->analytics->management_profiles->listManagementProfiles($o['account-id'], $o['property-id']);
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
