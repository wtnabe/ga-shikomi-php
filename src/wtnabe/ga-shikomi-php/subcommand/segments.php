<?php
namespace GAShikomi\Subcommand;

require_once 'base.php';

class SegmentsCommand extends Base
{
    protected function configure()
    {
        parent::configure();
        $this->setName('segments')
            ->setDescription('display segments');
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
