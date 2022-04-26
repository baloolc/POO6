<?php

class Speedometer
{

    public const MILES = 0.621371;
    private int $kilometer;


    public static function converter($kilometer): int
    {
        return $kilometer * self::MILES;
    }

    public function getKilometer()
    {
        return $this->kilometer;
    }

    public function setkilometer(int $kilometer): void
    {
        return $this->kilometer = $kilometer;
    }

}