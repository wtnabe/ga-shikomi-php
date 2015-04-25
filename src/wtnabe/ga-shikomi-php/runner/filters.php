<?php
namespace GAShikomi\Runner;

require_once 'base.php';

class FiltersRunner extends Base
{
    /**
     * @param  InputOption $input
     * @return object
     */
    function run($input)
    {
        $o = $this->api->config->options;

        return $this->api->analytics->management_filters->listManagementFilters($o['account-id']);
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
