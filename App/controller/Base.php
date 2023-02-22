<?php


namespace Sgm\App\controller;
defined('ABSPATH') or die();


class Base
{

    public function addingMenu()
    {
        add_menu_page('SendGrid Mail',
            'Sendgrid Mail',
            'manage_options',
            'test-plugin',
            array($this, 'form'));

    }

    function form()
    {

        include_once WP_PLUGIN_DIR . '/sendgrid_mail/App/view/form.php';


    }

    function myScripts()
    {
        wp_enqueue_script('contact-form', SGM_PATH . '/Assets/js/basic.js', array('jquery'), '1.0', true);
        wp_localize_script('contact-form', 'contactForm', array(
            'ajaxUrl' => admin_url('admin-ajax.php')

        ));
    }

    function submitForm()
    {
        $data = array(
            "from" => array("email"=>"sanjithp.20bir@kongu.edu"),
            "to" => $_POST['to'],
            "subject" => $_POST['subject'],
            "body" => $_POST['body']

        );

        $header =array(
            'Authorization' => 'Bearer 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'
        );
        $arguments = array(
            'header' => $header,
            'body'   =>$data,
        );
        $response =wp_remote_post("https://api.sendgrid.com/v3/mail/send",$arguments);
        $result=(json_decode(wp_remote_retrieve_body($response)));

        wp_send_json_success($result);
        wp_send_json_error($result);





    }
}


