<?php
// if (isset($_POST["submit"])) {

$recaptcha_secret = '6Lffn8opAAAAAM15qg6dSXbf9CwQMpLpHC8ScCBt';
$recaptcha_response = $_POST['g-recaptcha-response'];
$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
$recaptcha_data = [
    'secret' => $recaptcha_secret,
    'response' => $recaptcha_response
];

$recaptcha_options = [
    'http' => [
        'method' => 'POST',
        'content' => http_build_query($recaptcha_data)
    ]
];

$recaptcha_context = stream_context_create($recaptcha_options);
$recaptcha_result = file_get_contents($recaptcha_url, false, $recaptcha_context);
$recaptcha_response = json_decode($recaptcha_result);

if ($recaptcha_response->success) {
    // reCAPTCHA verification succeeded
    // Process form data and send email
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $phone = $_POST['phone'];
    $to = 'mosesnwigberi@gmail.com';
    $subject = 'New Contact Form Submission';
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
    // Mailtrap SMTP configuration
    $smtp_server = 'smtp.mailtrap.io';
    $from = 'Farzad Nosrati contact form';
    $smtp_username = 'api';
    $smtp_password = 'bc45d2d8999074df83ca03435e898543';
    $smtp_port = 587;
    $headers = "From: $from\r\n";
    $headers .= "Reply-To: $from\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    echo $name;
    if (mail($to, $subject, $body, $headers, "-f$from")) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['error' => 'Failed to send email']);
    }
} else {
    // reCAPTCHA verification failed
    echo json_encode(['error' => 'reCAPTCHA verification failed']);
}
// }

