<?php

namespace Uluumbch\WeightConversions;

class WeightConversionsClass
{
    public function poundsToKilograms($pounds)
    {
        return $pounds * 0.45359237;
    }

    public function kilogramsToPounds($kilograms)
    {
        return $kilograms / 0.45359237;
    }

    public function ouncesToGrams($ounces)
    {
        return $ounces * 28.3495231;
    }

    public function gramsToOunces($grams)
    {
        return $grams / 28.3495231;
    }

    public function stonesToKilograms($stones)
    {
        return $stones * 6.35029318;
    }

    public function kilogramsToStones($kilograms)
    {
        return $kilograms / 6.35029318;
    }
}
