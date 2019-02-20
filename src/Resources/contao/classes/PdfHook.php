<?php

namespace Arno1979;

class PdfHook extends \Contao\Frontend {
    public function PdfFilenameMod($strArticle, $objArticle) {
        // change filename to article alias
        $objArticle->title = $objArticle->alias;
    }
}
