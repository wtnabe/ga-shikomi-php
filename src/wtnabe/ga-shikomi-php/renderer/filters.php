<?php
namespace GAShikomi\Renderer;

require_once 'base.php';

class FiltersRenderer extends Base
{
    function toArray($item)
    {
        $details = (array)$item[$this->smallCamelize($item['type']).'Details'];

        return array('id'      => $item['id'],
                     'name'    => $item['name'],
                     'type'    => $item['type'],
                     'details' => join(',',
                                       array_filter($details,
                                                    function($item) {
                                                        return !is_array($item);
                                                    })));
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
