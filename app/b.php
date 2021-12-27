<?php

namespace app;

class b extends a
{
    public static $my_static = 'static var';

    public static function doubleColon()
    {
        echo parent::VALUES;
        echo self::$my_static;
    }
}