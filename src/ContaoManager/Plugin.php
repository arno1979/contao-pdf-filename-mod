<?php

/**
 * @copyright  Arno Schumacher 2020
 * @author     Arno Schumacher
 * @package    PdfFilenameMod
 * @license    LGPL-3.0+
 */

namespace Arno1979\PdfFilenameMod\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Arno1979\PdfFilenameMod\Arno1979PdfFilenameModBundle;

/**
 * Plugin for the Contao Manager.
 *
 */
class Plugin implements BundlePluginInterface
{
    /**
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(Arno1979PdfFilenameModBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
        ];
    }
}
