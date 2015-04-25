<?php
namespace GAShikomi\Runner;

require_once 'base.php';

class GaRunner extends Base
{
    /**
     * @param  InputOption $input
     * @return object
     */
    function run($input)
    {
        $o = $this->api->config->options;

        $opts = array_merge(array('ids'        => $o['profile-id'],
                                  'start-date' => $o['start-date'],
                                  'end-date'   => $o['end-date'],
                                  'metrics'    => $o['metrics']),
                            $this->_import_config($this->api->config->yaml));

        return $this->api->analytics->data_ga->get($o['profile-id'], $o['start-date'], $o['end-date'], $o['metrics'], $opts);
    }

    /**
     * @param  array $opts
     * @return array
     */
    function _import_config($opts)
    {
        $config = array();

        foreach ( array('ids',
                        'metrics',
                        'dimensions',
                        'filters',
                        'max-results',
                        'output',
                        'samplingLevel',
                        'segment',
                        'sort',
                        'start-index',
                        'fields')
                  as $key ) {
            if ( isset($opts[$key]) && $opts[$key] ) {
                $config[$key] = $opts[$key];
            }
        }

        return $config;
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
