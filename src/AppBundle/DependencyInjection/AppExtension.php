<?php
declare(strict_types=1);

namespace AppBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

final class AppExtension extends Extension
{
    /**
     * @inheritdoc
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new AppConfiguration();

        $this->processConfiguration($configuration, $configs);

        \Symfony\Component\VarDumper\VarDumper::dump('Everything is ok');
        die;
    }
}