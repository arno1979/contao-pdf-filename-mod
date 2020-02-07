<?php

namespace Arno1979\HookTest\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;
use Contao\ModuleArticle;
use Terminal42\ServiceAnnotationBundle\ServiceAnnotationInterface;

class PageHook implements ServiceAnnotationInterface
{
    /**
     * @Hook("printArticleAsPdf", priority=10)
     */
    public function onGeneratePage(string $articleContent, ModuleArticle $module): void
    {
        \log_message('Test2','arno.log');
//          $module->title = $module->alias;
    }
}
