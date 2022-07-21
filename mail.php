 <?php
    if (isset($_POST)) {
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $question = isset($_POST['question']) ? $_POST['question'] : null;

        // $to = 'postmaster@payginetech.uz';
        $to = '6527375@mail.ru';

        $subject = 'Заполнена форма на сайте от ' . $email;
        $message = "<html>
            <head>
                <title>Birthday Reminders for August</title>
            </head>
            <body>
                <p>Here are the birthdays upcoming in August!</p>
                <table>
                <tr>
                    <td>Имя: " . $name . "</td>
                    <td>Телефон: " . $phone . "</td>
                    <td>Email: " . $email . "</td>
                    <td>Вопрос: " . $question . "</td>
                </tr>
                </table>
            </body>
            </html>
            ";

        $headers = "From: " . $name . " <" . $email . "> \r\n";
        $send_email = mail($to, $subject, $message, $headers);

        echo json_encode(array(
            "success" => $send_email,
            "error" => !$send_email ? error_get_last()['message'] : null,
        ));
    } ?>

<?php
