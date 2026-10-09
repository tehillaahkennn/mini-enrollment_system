<?php

interface Notifier{
    public function send (string $recipient, string $message):string;
      
}