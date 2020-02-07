<?php

/**
 * @copyright  Arno Schumacher 2020
 * @author     Arno Schumacher
 * @package    PdfFilename
 * @license    LGPL-3.0+
 */

namespace Arno1979\PdfFilename\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;
use Contao\ModuleArticle;
use Terminal42\ServiceAnnotationBundle\ServiceAnnotationInterface;

class PrintArticleAsPdfListener implements ServiceAnnotationInterface
{
    /**
     * @Hook("printArticleAsPdf", priority=10)
     */
    public function onPrintArticleAsPdf(string $articleContent, ModuleArticle $module) {
        // change filename to article alias
         $module->title = $module->alias;
    }
}
