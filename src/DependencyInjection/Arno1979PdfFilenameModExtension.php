<?php

declare(strict_types=1);

/**
 * @copyright  Arno Schumacher 2020
 * @author     Arno Schumacher
 * @package    PdfFilenameMod
 * @license    LGPL-3.0+
 */

namespace Arno1979\PdfFilenameMod\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class Arno197PdfFilenameModExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $mergedConfig, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Resources/config')
        );

        $loader->load('services.yml');
    }
}
