<?php
namespace Dagou\JqueryMask\Interfaces;

interface Source {
    const VERSION = '1.14.16';

    /**
     * @return string
     */
    public function getJs(): string;
}