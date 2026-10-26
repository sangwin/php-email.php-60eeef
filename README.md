# Sending HTML Emails in PHP

## Overview

This example demonstrates how to send an HTML-formatted email using PHP's built-in `mail()` function.

It includes multiple recipients, email headers, CC recipients, and an HTML message containing text and a table.

## Features

- Sends HTML-formatted emails.
- Supports multiple recipients.
- Includes CC recipients.
- Sets MIME and character encoding headers.
- Checks whether the email was accepted by the mail function.

## Implementation

```php
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

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: <someone3@example.com>\r\n";
    $headers .= "Cc: someone4@example.com\r\n";

    $response = mail($to, $subject, $message, $headers);

    if ($response === true) {
        echo "Message sent successfully...";
    } else {
        echo "Message could not be sent...";
    }
?>
```

## How It Works

1. **Recipients:** The `$to` variable specifies the primary email recipients.
2. **Subject:** The `$subject` variable defines the email subject.
3. **HTML Message:** The `$message` variable contains the email body formatted in HTML.
4. **Headers:** MIME and content-type headers tell the recipient's email client to interpret the message as HTML.
5. **Sender and CC:** The `From` header identifies the sender, while `Cc` adds another recipient.
6. **Sending:** The `mail()` function attempts to send the email and returns a boolean indicating whether the message was accepted for delivery.

## Requirements

- PHP installed and configured.
- A working mail transfer agent or SMTP configuration on the server.
- Valid sender and recipient email addresses.

## Important Notes

- A `true` result from `mail()` does not guarantee that the email reached the recipient's inbox.
- For production applications, consider using a library such as [PHPMailer](https://github.com/PHPMailer/PHPMailer) with authenticated SMTP.
- Validate recipient addresses and avoid placing untrusted input directly into email headers.
- Use a verified sender domain and configure SPF, DKIM, and DMARC to improve email deliverability.

## Author

**Sangwin Gawande**

Website: [https://sangw.in](https://sangw.in)
````
