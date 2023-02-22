<?php

/*
 * Plugin Name: Sendgrid mail
 * Description: Sending mail through sendgrid
 * Version: 1.0
 * Author: Sibi
*/

defined('ABSPATH') or die();



use Sgm\App\Router;

require_once WP_PLUGIN_DIR.'/sendgrid_mail/vendor/autoload.php';

defined("SGM_PATH") or define("SGM_PATH",plugin_dir_url(__FILE__));
//efined("SENDGRID_API_KEY") or define("SENDGRID_API_KEY".'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');



    $router = new Router();
    $router->hook();

