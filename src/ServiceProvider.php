<?php

namespace Encore\Development;

class ServiceProvider extends \Encore\Container\ServiceProvider
{
    public function register()
    {
        //$this->container['config']->addPath($this->container->basePath().'/dev');
    }

    public function commands()
    {
        return ['Encore\Development\Command\Debug'];
    }
}
