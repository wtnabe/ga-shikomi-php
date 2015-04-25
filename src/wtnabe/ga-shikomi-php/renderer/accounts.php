<?php
namespace GAShikomi\Renderer;

require_once 'base.php';

class AccountsRenderer extends Base
{
    function toArray($item)
    {
        return array('id'          => $item['id'],
                     'permission' => join(',', $item['permissions']['effective']));
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
