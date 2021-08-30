<?php

namespace App;

use Exception;
use App\MD5;
use App\SHA1;

class Hash {
    private const ALGORITHEMS = [
        'md5' => MD5::class,
        'sha1' => SHA1::class
    ];

    public static function __callStatic($name, $arguments)
    {
        if (!array_key_exists($name, self::ALGORITHEMS)){
            throw new Exception("Error: Class not exists");
        }   
        
        $cls = self::ALGORITHEMS[$name];
        return (new $cls)->make($arguments[0]);
    }
}