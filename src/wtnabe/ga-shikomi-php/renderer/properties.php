<?php
namespace GAShikomi\Renderer;

require_once 'base.php';

class PropertiesRenderer extends Base
{
    function toArray($item)
    {
        return array('id'         => $item['id'],
                     'name'       => $item['name'],
                     'websiteUrl' => $item['websiteUrl'],
                     'permission' => join(',', $item['permissions']['effective']));
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
