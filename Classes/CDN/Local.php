<?php
namespace Dagou\JqueryMask\CDN;

use Dagou\JqueryMask\Traits\Asset;

class Local extends AbstractCDN {
    use Asset;
    const URL = 'EXT:jquery_mask/Resources/Public/';

    /**
     * @param string|NULL $js
     *
     * @return string
     */
    protected function renderJs(string $js = NULL): string {
        return $this->getAssetPath(
            self::URL.$this->getBuild()
        );
    }
}