<?php

/**
 * @copyright  feld.wald.wiese e.K. 2018 <http://www.feldwaldwiese.de>
 * @author     Arno Schumacher
 * @package    MatomoAjaxOptOutBundle
 * @license    LGPL-3.0+
 */

namespace Arno1979\PdfFilenameMod\ContaoManager;

use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

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
            BundleConfig::create('Arno1979\PdfFilenameMod\Arno1979PdfFilenameModBundle')
                ->setLoadAfter(['Contao\CoreBundle\ContaoCoreBundle'])
        ];
    }
}
