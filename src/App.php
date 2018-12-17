<?php

namespace Foundation;

class App {
    protected static $registry = [];

    public static function bind($key, $value) {
        static::$registry[$key] = $value;
    }

    public static function get($key) {
        if(! array_key_exists($key, $this->registry)) {
            throw new Exception("No {$key} bound in the container!");
        }

        return static::$registry[$key];
    }
}