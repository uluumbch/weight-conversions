<?php

use Uluumbch\WeightConversions\WeightConversionsClass;

it('can be instantiated', function () {
    $converter = new WeightConversionsClass();
    expect($converter)->toBeInstanceOf(WeightConversionsClass::class);
});

it('can be used statically', function () {
    $result = WeightConversionsClass::poundsToKilograms(1);
    expect($result)->toBe(0.45359237);
});
