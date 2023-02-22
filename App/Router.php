<?php
namespace Sgm\App;

defined('ABSPATH') or die();

use Sgm\App\controller\Base;

class Router
{


    public function hook(){
        $cont = new Base();
        add_action('admin_menu' , array($cont,'addingMenu'));
        add_action('admin_enqueue_scripts', array($cont, 'myScripts'));
        add_action('wp_ajax_submitForm', array($cont, 'submitForm'));
        add_action('wp_ajax_privation_submitForm', array($cont, 'submitForm'));


    }
}
