<?php
namespace Dagou\JqueryMask\Interfaces;

interface CDN {
    const VERSION = '1.14.16';

    /**
     * @param string|NULL $js
     * @param bool $footer
     */
    public function load(string $js = NULL, bool $footer = TRUE);
}