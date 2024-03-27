<?php

trait Notifiable
{
    public function notifier(): string
    {
        return "notifié!";
    }
}