<?php
namespace Dagou\JqueryMask\CDN;

use Dagou\JqueryMask\Traits\Asset;

class Customization extends AbstractCDN {
    use Asset;

    /**
     * @param string|NULL $js
     *
     * @return string
     */
    protected function renderJs(string $js = NULL): string {
        return $this->getAssetPath($js);
    }
}