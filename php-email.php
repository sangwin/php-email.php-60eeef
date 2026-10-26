<?php
    $to = "someone@example.com, someone2@example.com";
    $subject = "HTML email";

    $message = "
        <html>
            <head>
                <title>Sample HTML email</title>
            </head>
            <body>
                <p>This email contains HTML.</p>
                <table>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                    </tr>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                    </tr>
                </table>
            </body>
        </html>
    ";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <someone3@example.com>' . "\r\n";
    $headers .= 'Cc: someone4@example.com' . "\r\n";

    $response = mail($to,$subject,$message,$headers);

    if($response == true ) {
        echo "Message sent successfully...";
    }else {
        echo "Message could not be sent...";
    }

?>