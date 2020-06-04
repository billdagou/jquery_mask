<?php
namespace Dagou\JqueryMask\CDN;

use Dagou\JqueryMask\Interfaces\CDN;
use Dagou\JqueryMask\Traits\ExtConf;
use Dagou\JqueryMask\Traits\PageRenderer;
use TYPO3\CMS\Core\SingletonInterface;

abstract class AbstractCDN implements CDN, SingletonInterface {
    use ExtConf, PageRenderer;
    const URL = '';

    /**
     * @param string|NULL $js
     * @param bool $footer
     */
    public function load(string $js = NULL, bool $footer = TRUE) {
        $js = $this->renderJs($js);

        if ($footer) {
            $this->getPageRenderer()->addJsFooterLibrary('jquery_mask', $js);
        } else {
            $this->getPageRenderer()->addJsLibrary('jquery_mask', $js);
        }
    }

    /**
     * @param string|NULL $js
     *
     * @return string
     */
    protected function renderJs(string $js = NULL): string {
        return static::URL.$this->getBuild();
    }

    /**
     * @return string
     */
    protected function getBuild(): string {
        return 'jquery.mask.min.js';
    }
}