<?php
namespace GAShikomi\Runner;

require_once 'base.php';

class DimensionsRunner extends Base
{
    /**
     * @param  InputOption $input
     * @return object
     */
    function run($input)
    {
        return $this->api->analytics->metadata_columns->listMetadataColumns('ga');
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
