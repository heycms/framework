<?php
/**
 * HeyCMS
 *
 * An open source application development framework for PHP
 *
 * @package    HeyCMS
 * @author     HeyCMS Dev Team
 * @copyright  2018-2020 HeyCMS Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://HeyCMS.com
 * @since      Version 1.0.0
 * @filesource
 */

// Check Version
if (version_compare(phpversion(), '7.0.0', '<')) {
    exit('PHP7+ Required');
}

define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);


//$app->run();
// Registry
// Load the default config
// Log

//date_default_timezone_set($config->get('date_timezone'));
