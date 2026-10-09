<?php
require_once __DIR__ . '/Notifier.php';

class EmailNotifier implements Notifier{
    public function send (string $recipient, string $message): string
    {
        echo "Sending email to $recipient with message: $message\n";
        //simulate sending an email 
        return "Email sent to $recipient with message: $message";
    }


}