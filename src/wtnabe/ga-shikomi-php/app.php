<?php
namespace GAShikomi;

foreach ( glob(dirname(__FILE__).'/subcommand/*.php') as $file ) {
  require_once $file;
}

class App
{
    function run()
    {
        $app = new \Symfony\Component\Console\Application();
        foreach ( $this->commands() as $command ) {
            $app->add(new $command());
        }
        $app->run();
    }

    /**
     * @return array
     */
    function commands()
    {
        return array_values(
                            preg_grep('/GAShikomi/',
                                      preg_grep('/Command/', get_declared_classes())));
    }
}

/*
Local Variables:
c-basic-offset: 4
End:
*/
