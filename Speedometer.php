<?php

class Speedometer
{
    public const KM = 22;
    public const MILES = 0.621371;


    public static function converter(): int
    {
        return self::KM * self::MILES;
    }

}