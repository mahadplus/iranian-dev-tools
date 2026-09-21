<?php

namespace IranianDevTools\NationalId;

class Validator
{
    /**
     * Validate an Iranian national ID.
     *
     * @param string $nationalId
     * @return bool
     */
    public function isValid(string $nationalId): bool
    {
        if (!preg_match('/^[0-9]{10}$/', $nationalId)) {
            return false;
        }

        if (preg_match('/^([0-9])\1{9}$/', $nationalId)) {
            return false;
        }

        $sum = 0;

        for ($i = 0; $i < 9; $i++) {
            $sum += (int) $nationalId[$i] * (10 - $i);
        }

        $remainder = $sum % 11;

        $checkDigit = (int) $nationalId[9];

        $expectedCheckDigit = $remainder < 2
            ? $remainder
            : 11 - $remainder;

        return $checkDigit === $expectedCheckDigit;
    }
}