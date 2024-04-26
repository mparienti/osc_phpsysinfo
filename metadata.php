<?php

/**
 * Changelog:
 */

$sMetadataVersion = '2.1';
$aModule = [
    'id' => 'osc_phpsysinfo',
    'title' => 'PhpSysInfo',
    'description' => 'PhpSysInfo Embeded in Oxid Eshop.',
    'version' => '3.0',
    'extend' => [
    ],
    'controllers' => [
        'osc_phpsysinfo' => \OxidSolutionCatalysts\PhpSysInfo\Controller\Admin\phpSysInfoOxidAdminController::class,
    ],
    'templates' => [
    ],
    'settings' => [
    ],
];
