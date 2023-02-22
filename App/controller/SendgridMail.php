

//$params = array(
//    'api_user' => $user,
//    'api_key' => $pass,
//    'from' => $from,
//    'to' => $to,
//    'subject' => $subject,
//    'text' => $body,
//);
//
//$request = $url.'api/mail.send.json';
//
//// Generate curl request
//$session = curl_init($request);
//
//// Tell curl to use HTTP POST
//curl_setopt ($session, CURLOPT_POST, true);
//
//// Tell curl that this is the body of the POST
//curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
//
//// Tell curl not to return headers, but do return the response
//curl_setopt($session, CURLOPT_HEADER, false);
//curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
//
//// obtain response
//$response = curl_exec($session);
//curl_close($session);
//
//// print everything out
////print_r($response);
//
//?>


<!---->
<!--//        $to = $_POST['to'];-->
<!--//        $subject = $_POST['subject'];-->
<!--//        $body = $_POST['body'];-->
<!--//        echo $to;-->
<!--//        $url = 'https://api.sendgrid.com/';-->
<!--//        $user = 'Sanjith Sibi';-->
<!--//        $api_key = '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';-->
<!--//-->
<!--//        $json_string = array(-->
<!--//-->
<!--//            'to' => array(-->
<!--//                'example1@sendgrid.com', 'example2@sendgrid.com'-->
<!--//            ),-->
<!--//            'category' => 'test_category'-->
<!--//        );-->
<!--//-->
<!--//-->
<!--//        $params = array(-->
<!--//            'api_user' => $user,-->
<!--//            'api_key' => $api_key,-->
<!--//            'x-smtpapi' => json_encode($json_string),-->
<!--//            'to' => $to,-->
<!--//            'subject' => $subject,-->
<!--//            'body' => $body,-->
<!--//        );-->
<!--//-->
<!--//-->
<!--//        $request = $url . 'api/mail.send.json';-->
<!--//-->
<!--//// Generate curl request-->
<!--//        $session = curl_init($request);-->
<!--//// Tell curl to use HTTP POST-->
<!--//        curl_setopt($session, CURLOPT_POST, true);-->
<!--//// Tell curl that this is the body of the POST-->
<!--//        curl_setopt($session, CURLOPT_POSTFIELDS, $params);-->
<!--//// Tell curl not to return headers, but do return the response-->
<!--//        curl_setopt($session, CURLOPT_HEADER, false);-->
<!--//// Tell PHP not to use SSLv3 (instead opting for TLS)-->
<!--//        curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);-->
<!--//        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);-->
<!--//-->
<!--//// obtain response-->
<!--//        $response = curl_exec($session);-->
<!--//        curl_close($session);-->
<!--//-->
<!--//// print everything out-->
<!--//        print_r($response);-->
<!--//-->


