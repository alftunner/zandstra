<?php

class MailNotifier extends Notifier
{

    public function inform($message): void
    {
        echo "Уведомление почтой: {$message}";
    }
}