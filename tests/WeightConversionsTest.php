<?php

use Uluumbch\WeightConversions\WeightConversionsClass;

describe('WeightConversionsClass', function () {
    beforeEach(function () {
        $this->converter = new WeightConversionsClass();
    });

    describe('poundsToKilograms', function () {
        it('converts pounds to kilograms correctly', function () {
            expect($this->converter->poundsToKilograms(1))->toEqualWithDelta(0.45359237, 5);
            expect($this->converter->poundsToKilograms(10))->toEqualWithDelta(4.5359237, 5);
            expect($this->converter->poundsToKilograms(2.2))->toEqualWithDelta(0.99790321, 5);
        });

        it('handles zero pounds', function () {
            expect($this->converter->poundsToKilograms(0))->toBe(0.0);
        });
    });

    describe('kilogramsToPounds', function () {
        it('converts kilograms to pounds correctly', function () {
            expect($this->converter->kilogramsToPounds(1))->toEqualWithDelta(2.20462262, 0.00001);
            expect($this->converter->kilogramsToPounds(10))->toEqualWithDelta(22.0462262, 0.00001);
            expect($this->converter->kilogramsToPounds(0.5))->toEqualWithDelta(1.10231131, 0.00001);
        });

        it('handles zero kilograms', function () {
            expect($this->converter->kilogramsToPounds(0))->toBe(0.0);
        });
    });

    describe('ouncesToGrams', function () {
        it('converts ounces to grams correctly', function () {
            expect($this->converter->ouncesToGrams(1))->toEqualWithDelta(28.3495231, 5);
            expect($this->converter->ouncesToGrams(10))->toEqualWithDelta(283.495231, 5);
            expect($this->converter->ouncesToGrams(0.5))->toEqualWithDelta(14.17476155, 5);
        });

        it('handles zero ounces', function () {
            expect($this->converter->ouncesToGrams(0))->toBe(0.0);
        });
    });

    describe('gramsToOunces', function () {
        it('converts grams to ounces correctly', function () {
            expect($this->converter->gramsToOunces(28.3495231))->toEqualWithDelta(1, 5);
            expect($this->converter->gramsToOunces(100))->toEqualWithDelta(3.52739619, 5);
            expect($this->converter->gramsToOunces(50))->toEqualWithDelta(1.76369810, 5);
        });

        it('handles zero grams', function () {
            expect($this->converter->gramsToOunces(0))->toBe(0.0);
        });
    });

    describe('stonesToKilograms', function () {
        it('converts stones to kilograms correctly', function () {
            expect($this->converter->stonesToKilograms(1))->toEqualWithDelta(6.35029318, 5);
            expect($this->converter->stonesToKilograms(10))->toEqualWithDelta(63.5029318, 5);
            expect($this->converter->stonesToKilograms(0.5))->toEqualWithDelta(3.17514659, 5);
        });

        it('handles zero stones', function () {
            expect($this->converter->stonesToKilograms(0))->toBe(0.0);
        });
    });

    describe('kilogramsToStones', function () {
        it('converts kilograms to stones correctly', function () {
            expect($this->converter->kilogramsToStones(6.35029318))->toEqualWithDelta(1, 5);
            expect($this->converter->kilogramsToStones(100))->toEqualWithDelta(15.7473044, 5);
            expect($this->converter->kilogramsToStones(50))->toEqualWithDelta(7.8736522, 5);
        });

        it('handles zero kilograms', function () {
            expect($this->converter->kilogramsToStones(0))->toBe(0.0);
        });
    });

    it('will not use debugging functions')
        ->expect(['dd', 'dump', 'ray'])
        ->not->toBeUsed();
});
