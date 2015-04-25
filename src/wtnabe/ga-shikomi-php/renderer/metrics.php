<?php
namespace GAShikomi\Renderer;

require_once 'base.php';

class MetricsRenderer extends Base
{
    function filter($item)
    {
        return $item['attributes']['type'] == 'METRIC' &&
            $this->isVisible($item);
    }

    function toArray($item)
    {
        return array('id' => $item['id'],
                     'description' => $item['attributes']['description']);
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
