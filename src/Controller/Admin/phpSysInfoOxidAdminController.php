<?php

namespace OxidSolutionCatalysts\PhpSysInfo\Controller\Admin;

use OxidEsales\Eshop\Application\Controller\Admin\AdminController;

/*
 * A simple wrapper around original phpSysinfo script
 */
class phpSysInfoOxidAdminController extends AdminController {

    public function render()
    {
        return '@osc_phpsysinfo/osc_sysininfo_main.twig';
    }
}
