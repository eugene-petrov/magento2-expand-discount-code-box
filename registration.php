<?php
// @codingStandardsIgnoreFile
declare(strict_types=1);

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'ReadyToGo_ExpandDiscountCodeBox',
    isset($file) && realpath($file) == __FILE__ ? dirname($file) : __DIR__
);
