<?php
namespace Dagou\JqueryMask\Source;

use Dagou\JqueryMask\Interfaces\Source;
use TYPO3\CMS\Core\SingletonInterface;

abstract class AbstractSource implements Source, SingletonInterface {
    protected const URL = '';
    protected const VERSION = '1.14.16';

    /**
     * @return string
     */
    public function getJs(): string {
        return static::URL.$this->getJsBuild();
    }

    /**
     * @return string
     */
    protected function getJsBuild(): string {
        return 'jquery.mask.min.js';
    }
}