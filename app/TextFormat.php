<?php

namespace App;

class TextFormat
{
    // Capitalize
    public static function capitalize($text)
    {
        return ucfirst(strtolower($text));
    }

    
    public static function sentence($text)
    {
        
        return ucfirst(strtolower($text));
    }

    // Uppercase
    public static function upper($text)
    {
        return strtoupper($text);
    }
    
}
