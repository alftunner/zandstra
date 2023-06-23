<?php

class RegistrationNotifier
{
    public function register(Lesson $lesson) : void
    {
        $notifier = Notifier::getNotifier();
        $notifier->inform("new lesson: cost {$lesson->cost()}");
    }
}