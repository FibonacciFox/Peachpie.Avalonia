<?php

namespace Models;

class TimelineEntry
{
    private string $time;
    private string $kind;
    private string $message;

    public function __construct(string $kind, string $message)
    {
        $this->time = date('H:i:s');
        $this->kind = $kind;
        $this->message = $message;
    }

    public function get_Time(): string
    {
        return $this->time;
    }

    public function get_Kind(): string
    {
        return $this->kind;
    }

    public function get_Message(): string
    {
        return $this->message;
    }
}
