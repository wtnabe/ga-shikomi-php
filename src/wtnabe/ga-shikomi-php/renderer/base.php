<?php
namespace GAShikomi\Renderer;

class Base
{
    function __construct($resource, $config)
    {
        $this->resource = $resource;
        $this->config   = $config;
    }

    function renderTo($output)
    {
        $output->writeln($this->dump());
    }

    function dump()
    {
        return $this->toCsv($this->resource->getItems());
    }

    /**
     * @param  array $item
     * @return boolean
     */
    function filter($item)
    {
        return true;
    }

    /**
     * @param  array $item
     * @return array
     */
    function toArray($item)
    {
        //
    }

    /**
     * @param array $items
     * @return string
     */
    function toCsv($items)
    {
        $fp = fopen('php://temp', 'r+');
        foreach ( array_map(array($this, 'toArray'),
                            array_filter($items, array($this, 'filter'))) as $item ) {
            fputcsv($fp, array_values($item));
        }
        rewind($fp);
        $contents = stream_get_contents($fp);
        fclose($fp);

        return $contents;
    }

    /**
     * @param  array $item
     * @return boolean
     */
    function isVisible($item)
    {
        return ($this->config->options['include-deprecated'])
            ? true
            : $item['attributes']['status'] == 'PUBLIC';
    }

    /**
     * @param  string $str
     * @return string
     */
    function smallCamelize($str)
    {
        return lcfirst(join('', array_map(function($item) {
                        return ucfirst(strtolower($item));
                    }, preg_split('/_/', $str))));
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
