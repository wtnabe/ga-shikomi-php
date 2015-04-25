<?php
namespace GAShikomi\Renderer;

require_once 'base.php';

class GoalsRenderer extends Base
{
    function toArray($item)
    {
        return array('id'      => $item['id'],
                     'name'    => $item['name'],
                     'type'    => $item['type'],
                     'details' => $item[$this->smallCamelize($item['type']).'Details']->url);
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
