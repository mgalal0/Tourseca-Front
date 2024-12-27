<?php
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed']);
    exit;
}

try {
    // Validate form data
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $country = trim($_POST['country'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        throw new Exception('Please fill in all required fields.');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception('Please enter a valid email address.');
    }

    $mail = new PHPMailer(true);

    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'mahmoudgalal55555@gmail.com';
    $mail->Password = 'ytypprohydvzmxna';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;
    $mail->CharSet = 'UTF-8';

    // Recipients
    $mail->setFrom('info@LuxorPrivateTour.com', 'Contact Form');
    $mail->addAddress('info@LuxorPrivateTour.com');
    $mail->addReplyTo($email, $name);

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form Submission';
    
    $mailContent = "
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    </head>
    <body style='margin: 0; padding: 0; background-color: #f4f4f4; font-family: Arial, sans-serif;'>
        <table role='presentation' style='width: 100%; border-collapse: collapse;'>
            <tr>
                <td align='center' style='padding: 40px 0;'>
                    <table role='presentation' style='width: 600px; border-collapse: collapse; background-color: #ffffff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);'>
                        <!-- Header -->
                        <tr>
                            <td style='padding: 40px 30px; background-color: #095763; border-radius: 8px 8px 0 0;'>
                                <h1 style='color: #C8E677; margin: 0; font-size: 24px; text-align: center;'>New Contact Form Submission</h1>
                            </td>
                        </tr>
    
                        <!-- Content -->
                        <tr>
                            <td style='padding: 30px;'>
                                <table role='presentation' style='width: 100%; border-collapse: collapse;'>
                                    <tr>
                                        <td style='padding: 10px; background-color: #f8f8f8; border-radius: 6px;'>
                                            <p style='margin: 0; color: #666666; font-size: 14px;'>Name</p>
                                            <p style='margin: 5px 0 0 0; color: #095763; font-size: 16px; font-weight: bold;'>{$name}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style='padding: 10px; margin-top: 10px; background-color: #f8f8f8; border-radius: 6px;'>
                                            <p style='margin: 0; color: #666666; font-size: 14px;'>Email</p>
                                            <p style='margin: 5px 0 0 0; color: #095763; font-size: 16px;'>{$email}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style='padding: 10px; margin-top: 10px; background-color: #f8f8f8; border-radius: 6px;'>
                                            <p style='margin: 0; color: #666666; font-size: 14px;'>Phone</p>
                                            <p style='margin: 5px 0 0 0; color: #095763; font-size: 16px;'>{$phone}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style='padding: 10px; margin-top: 10px; background-color: #f8f8f8; border-radius: 6px;'>
                                            <p style='margin: 0; color: #666666; font-size: 14px;'>Country</p>
                                            <p style='margin: 5px 0 0 0; color: #095763; font-size: 16px;'>{$country}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style='padding: 20px 0;'>
                                            <p style='margin: 0; color: #666666; font-size: 14px;'>Message</p>
                                            <div style='margin-top: 10px; padding: 15px; background-color: #f8f8f8; border-radius: 6px; color: #333333; font-size: 16px; line-height: 1.6;'>
                                                {$message}
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
    
                        <!-- Footer -->
                        <tr>
                            <td style='padding: 20px 30px; background-color: #f8f8f8; border-radius: 0 0 8px 8px; text-align: center;'>
                                <p style='margin: 0; color: #666666; font-size: 14px;'>This email was sent from your website contact form</p>
                                <p style='margin: 10px 0 0 0; color: #095763; font-size: 14px;'>© " . date('Y') . " Touresca. All rights reserved.</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
    </html>";
    
    $mail->Body = $mailContent;
    $mail->AltBody = strip_tags($mailContent);

    $mail->send();
    
    echo json_encode([
        'status' => 'success',
        'message' => 'Thank you for your message. We will get back to you soon!'
    ]);
} catch (Exception $e) {
    error_log("Mail Error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => 'Sorry, there was an error sending your message. Please try again later.'
    ]);
}
?>