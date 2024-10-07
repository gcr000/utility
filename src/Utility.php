<?php

namespace gcr000\Utility;

class Utility
{
    public static function hello()
    {
        return 'Hello World';
    }

    public static function logMessage($msg)
    {
        Log::info('Log message from gcr000 package:'.$msg);
    }
}