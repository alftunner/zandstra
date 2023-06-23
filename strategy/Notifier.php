<?php

abstract class Notifier
{
    public static function getNotifier($typeNotifier = 'text') : Notifier
    {
        return match ($typeNotifier) {
            'mail' => new MailNotifier,
            default => new TextNotifier,
        };
    }

    abstract public function inform($message) : void;
}