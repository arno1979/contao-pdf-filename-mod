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

class PdfFilename implements ServiceAnnotationInterface
{
    /**
     * @Hook("printArticleAsPdf", priority=10)
     */
    public function onprintArticleAsPdf(string $articleContent, ModuleArticle $module): void
    {
         $module->title = $module->alias;
    }
}
