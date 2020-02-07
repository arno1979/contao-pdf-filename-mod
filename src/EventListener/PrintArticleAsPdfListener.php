<?php

/**
 * @copyright  Arno Schumacher 2020
 * @author     Arno Schumacher
 * @package    PdfFilenameMod
 * @license    LGPL-3.0+
 */

namespace Arno1979\PdfFilenameMod\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;
use Contao\ModuleArticle;
use Terminal42\ServiceAnnotationBundle\ServiceAnnotationInterface;

class PrintArticleAsPdfListener implements ServiceAnnotationInterface
{
    /**
     * @Hook("printArticleAsPdf")
     */
    public function onPrintArticleAsPdf(string $articleContent, ModuleArticle $module) {
        // change filename to article alias
        \log_message('TestPDF','arno.log');
//         $objArticle->title = $objArticle->alias;
    }
}
