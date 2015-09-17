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

        return $this->_raw_get($opts);
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

    /**
     * allow recursive call
     *
     * @param  array $input
     * @return array
     */
    function _raw_get($opts) {
        $config = array_merge(array('ids'        => null,
                                    'start-date' => null,
                                    'end-date'   => null,
                                    'metrics'    => null), $opts);

        $result = $this->api->analytics->data_ga->get($config['ids'], $config['start-date'], $config['end-date'], $config['metrics'], $config);

        if ( $result['nextLink'] ) {
            parse_str(parse_url($result['nextLink'], PHP_URL_QUERY), $query);

            $config['start-index'] = $query['start-index'];

            $rows   = $result['rows'];
            $result = $this->_raw_get($config);
            $result['rows'] = array_merge($rows, $result['rows']);
        }

        return $result;
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
