 <?php
    if (isset($_POST)) {
        $name = $_REQUEST['name'];
        $phone = $_REQUEST['phone'];
        $email = $_REQUEST['email'];
        $question = $_REQUEST['question'];

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

        echo ($send_email) ? 'success' : 'error';
    } ?>

<?php
