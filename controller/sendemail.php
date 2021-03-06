<?php
/**
 * Created by PhpStorm.
 * User: xuezhou
 * Date: 2/9/17
 * Time: 1:13 PM
 */
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if(isset($_POST['contact_fn'])) {
    $contact_fn = test_input($_POST['contact_fn']);
    $contact_ln = test_input($_POST['contact_ln']);
    $contact_email = test_input($_POST['contact_email']);
    $contact_phone = test_input($_POST['contact_phone']);
    $contact_textarea = test_input($_POST['contact_textarea']);
    $contact_program = $_POST['contact_program'];
    if ($contact_fn=="" || $contact_ln=="" ||$contact_email=="" ||$contact_textarea== "") {
        echo "请确保信息完整。";
    }
    else {
        $from = "admin@cn.knovva.com";
        $to = "xue.zhou@knovva.com";
        $subject = "New Question from Prospective Client";
        //header
        $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From:  ' .'Knovva Admin' . ' <' .'admin@cn.knovva.com' . '>' . " \r\n" .
            'Reply-To: ' . 'admin@cn.knovva.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        $message = '<html><body>';
        $message .= '<center>';
        $message .= '<br /><br />';
        $message .= '<h3>Below is the contact info from a prospective client:&nbsp' . $contact_fn . '</h3>';
        $message .= '<table>';
        $message .= '<tr>';
        $message .= '<th>First Name</th>';
        $message .= '<th>Last Name</th>';
        $message .= '<th>Email</th>';
        $message .= '<th>Phone</th>';
        $message .= '<th>Program</th></tr>';
        $message .= '<tr>';
        $message .= '<td>' . $contact_fn . '</td>';
        $message .= '<td>' . $contact_ln . '</td>';
        $message .= '<td>' . $contact_email . '</td>';
        $message .= '<td>' . $contact_phone . '</td>';
        $message .= '<td>' . $contact_program . '</td></tr></table>';
        $message .= '<br /><br />';
        $message .= '<table style="width: 80%">';
        $message .= '<tr><th>Message</th><tr>';
        $message .= '<tr><td>' . $contact_textarea . '</td></tr></table>';
        $message .= '_____________________________________<br /><br />';
        $message .= 'Thanks,<br/>Knovva.com IT Support<br/>';
        $message .= '<br/><a target="_new" href="http://www.knovva.com"/>http://cn.knovva.com</a>';
        $message .= 'Knovva.com &copy; 2017';
        $message .= '</center>';
        $message .= '</body></html>';

        $params = '-f '.$from;
    }
}else {
    echo "the post is not set up";
}

//send
$send = mail($to,$subject,$message,$headers,$params);

if($send) {
    echo '<br>';
    echo '谢谢，我们将尽快与您联系！';
} else {
    echo '发送失败，请重试。';
}