<?php
namespace GAShikomi\Runner;

require_once 'base.php';

class SegmentsRunner extends Base
{
    /**
     * @param  InputOption $input
     * @return object
     */
    function run($input)
    {
        return $this->api->analytics->management_segments->listManagementSegments();
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
