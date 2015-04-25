<?php
namespace GAShikomi;

foreach ( glob(__DIR__.'/renderer/*.php') as $f ) { require_once $f; }

class Renderer
{
    /**
     * @param object $resource
     * @param OutputInterface $output
     */
    static function factory($command, $resource)
    {
        $class = 'GAShikomi\Renderer\\'.str_replace(array('GAShikomi\\', 'Subcommand\\', 'Command'), '', get_class($command)).'Renderer';

        return new $class($resource, $command->api->config);
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
