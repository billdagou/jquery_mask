<?php
namespace Dagou\JqueryMask\ViewHelpers\Uri;

use Dagou\JqueryMask\Interfaces\Source;
use Dagou\JqueryMask\Source\Local;
use Dagou\JqueryMask\Utility\ExtensionUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class JsViewHelper extends AbstractViewHelper {
    /**
     * @return string
     */
    public function render(): string {
        if (($className = ExtensionUtility::getSource()) && is_subclass_of($className, Source::class)) {
            $source = GeneralUtility::makeInstance($className);
        } else {
            $source = GeneralUtility::makeInstance(Local::class);
        }

        return $source->getJs();
    }
}