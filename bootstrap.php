<?php
/**
 * Copyright © 2017 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

require_once __DIR__ . '/../../../app/bootstrap.php';
defined('MTF_BP') || define('MTF_BP', str_replace('\\', '/', (__DIR__)));
defined('MTF_TESTS_PATH') || define('MTF_TESTS_PATH', MTF_BP . '/tests/app/');
defined('MTF_TESTS_MODULE_PATH') || define('MTF_TESTS_MODULE_PATH', MTF_BP . '/tests/app/');
defined('VENDOR_TESTS_MODULE_PATH') || define('VENDOR_TESTS_MODULE_PATH', BP . '/vendor/*/*/Test/Functional/');
defined('MTF_STATES_PATH') || define('MTF_STATES_PATH', MTF_BP . '/Magento/Mtf/App/State/');

require_once __DIR__ . '/vendor/autoload.php';
