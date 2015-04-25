<?php
namespace GAShikomi\Renderer;

require_once 'base.php';

class SegmentsRenderer extends Base
{
    function toArray($item)
    {
        return array('id'        => $item['id'],
                     'segmentId' => $item['segmentId'],
                     'name'      => $item['name'],
                     'type'      => $item['type']);
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
