<?php
namespace GAShikomi\Renderer;

require_once 'base.php';

class GaRenderer extends Base
{
    function dump()
    {
        $totals  = $this->resource->getTotalsForAllResults();
        $rows    = $this->resource->getRows();
        $headers = array_map(array($this, '_name'), $this->resource->getColumnHeaders());

        switch ( sizeof($rows) ) {
        case 1:
            return array($headers, $totals);
        default:
            $this->headers = $headers;
            return $this->toCsv(array_merge(array(array_combine($headers, $headers)), $rows));
        }
    }

    /**
     * @param  array $item
     * @return array
     */
    function toArray($item)
    {
        return $item;
    }

    /**
     * @param  object $header
     * @return string
     */
    function _name($header)
    {
        return $header->name;
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
