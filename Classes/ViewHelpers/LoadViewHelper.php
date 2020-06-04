<?php
namespace Dagou\JqueryMask\ViewHelpers;

use Dagou\JqueryMask\CDN\Customization;
use Dagou\JqueryMask\CDN\Local;
use Dagou\JqueryMask\Interfaces\CDN;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class LoadViewHelper extends AbstractViewHelper {
    public function initializeArguments() {
        $this->registerArgument('footer', 'boolean', 'Add to footer or not.', FALSE, TRUE);
        $this->registerArgument('js', 'string', 'jQuery Mask file path.');
    }

    public function render() {
        $cdn = $this->getCDN((bool)$this->arguments['js']);

        $cdn->load($this->arguments['js'], $this->arguments['footer']);
    }

    /**
     * @param bool $isCustomized
     *
     * @return \Dagou\JqueryMask\Interfaces\CDN
     */
    protected function getCDN(bool $isCustomized): CDN {
        if ($isCustomized) {
            return GeneralUtility::makeInstance(Customization::class);
        }

        if (($className = $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['jquery_mask']['CDN']) && is_subclass_of($className, CDN::class)) {
            return GeneralUtility::makeInstance($className);
        } else {
            return GeneralUtility::makeInstance(Local::class);
        }
    }
}