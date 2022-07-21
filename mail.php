 <?php
    if (isset($_POST)) {
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $question = isset($_POST['question']) ? $_POST['question'] : null;

        $to = 'postmaster@payginetech.uz';
        $subject = 'Form filled.';
        $message = "" . $name . " \r\n" . $email . " \r\n" . $phone . " \r\n" . $question . " \r\n";
        $send_email = mail($to, $subject, $message);

        echo json_encode(array(
            "success" => $send_email,
            "error" => !$send_email ? error_get_last()['message'] : null,
            "msg" => $message,
            "sub" => $subject
        ));
    } ?>

<?php
