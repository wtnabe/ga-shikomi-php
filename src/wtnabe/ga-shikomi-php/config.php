<?php
namespace GAShikomi;

use Symfony\Component\Yaml\Yaml;

class Config
{
    /**
     * @var array
     */
    var $arguments;
    /**
     * @var array
     */
    var $options;
    /**
     * @var array
     */
    var $yaml = array();

    /**
     * @param object $input
     */
    function __construct($input)
    {
        $this->_parseInput($input);
        $this->_parseConfigFile();
    }

    function _parseInput($input)
    {
        $this->arguments = $input->getArguments();
        $this->options   = $input->getOptions();
    }

    function _parseConfigFile()
    {
        $config_file = $this->configFile();
        if ( $config_file && file_exists($config_file) ) {
            $this->yaml = Yaml::Parse(file_get_contents($config_file));
        }
    }

    /**
     * @return mixed null or string
     */
    function configFile()
    {
        return $this->options['config-file'];
    }

    /**
     * @return string
     */
    function credentialStore()
    {
        return ($this->options['credential-store'])
            ? $this->options['credential-store']
            : getcwd();
    }

    /**
     * @return string
     */
    function format()
    {
        return ($this->options['format'])
            ? $this->options['format']
            : 'original';
    }

    /**
     * @return string
     */
    function withCsvHeader()
    {
        return $this->options['with-csv-header'];
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
