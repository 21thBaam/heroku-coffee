<?php
// Comment out the above line if not using Composer
// require("<PATH TO>/sendgrid-php.php");
// If not using Composer, uncomment the above line and
// download sendgrid-php.zip from the latest release here,
// replacing <PATH TO> with the path to the sendgrid-php.php file,
// which is included in the download:
// https://github.com/sendgrid/sendgrid-php/releases

$API_KEY = "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";

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("rivalpaper@gmail.com", "Example User");
$email->setSubject("Sending with SendGrid is Fun");
$email->addTo("angel-97_@hotmail.com", "Example User");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);
$sendgrid = new \SendGrid($API_KEY);
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}
