<?php
namespace GAShikomi\Runner;

use GAShikomi\Api;
use GAShikomi\Config;

class Base
{
    function __construct($api)
    {
        $this->api = $api;
    }

    /**
     * @param  InputOption $input
     * @return object
     */
    function run($input)
    {
        // inerit me
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
