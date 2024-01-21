<?php
declare(strict_types=1);

class ShoppingPoint
{
    public static $point;

    public static function countPoint()
    {
        self::$point++;
    }
}