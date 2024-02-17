<?php

namespace MG\Inbox\Services;

class Inbox
{
    public function send($message, $to)
    {
        return "Message sent to $to";
    }

    public function receive($message, $from)
    {
        return "Message received from $from";
    }

    public function markAsRead($message)
    {
        return "Message marked as read";
    }

    public function markAsUnread($message)
    {
        return "Message marked as unread";
    }

    public function delete($message)
    {
        return "Message deleted";
    }

    public function star($message)
    {
        return "Message starred";
    }

    public function unstar($message)
    {
        return "Message unstarred";
    }
}
