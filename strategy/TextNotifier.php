<?php

class TextNotifier extends Notifier
{
    public function inform($message): void
    {
        echo "Уведомление текстом: {$message}";
    }
}