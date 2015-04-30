<?php
namespace GAShikomi;

class Storage
{
    static $GOOGLE_API_KEYS = array('GOOGLE_API_CREDENTIAL', 'GOOGLE_API_SECRETS');
    /**
     * @param  Config $config
     * @return object
     */
    static function factory($config)
    {
        return
            sizeof(array_filter(self::$GOOGLE_API_KEYS,
                                array('self', '_env_exists'))) == sizeof(self::$GOOGLE_API_KEYS)
            ? new EnvStorage($config)
            : new FileStorage($config);
    }

    /**
     * @param  string $key
     * @return boolean
     */
    static function _env_exists($key)
    {
        return array_key_exists($key, $_SERVER);
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/

