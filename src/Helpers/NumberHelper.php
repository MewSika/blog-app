<?php 
namespace App\Helpers;

class NumberHelper {
    public static function price(float $number, string $money = "€"): string 
    {
        return number_format($number, 0, '', ' ') . ' ' . $money;
    }
}