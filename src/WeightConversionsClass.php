<?php

namespace Uluumbch\WeightConversions;

class WeightConversionsClass
{
    public static function poundsToKilograms($pounds)
    {
        return $pounds * 0.45359237;
    }

    public static function kilogramsToPounds($kilograms)
    {
        return $kilograms / 0.45359237;
    }

    public static function ouncesToGrams($ounces)
    {
        return $ounces * 28.3495231;
    }

    public static function gramsToOunces($grams)
    {
        return $grams / 28.3495231;
    }

    public static function stonesToKilograms($stones)
    {
        return $stones * 6.35029318;
    }

    public static function kilogramsToStones($kilograms)
    {
        return $kilograms / 6.35029318;
    }
}
