<?php

namespace IranianDevTools\NationalId;

class Generator
{
    /**
     * Generate a valid Iranian National ID.
     *
     * @return string
     */
    public function generate(): string
    {
        $nationalId = '';

        for ($i = 0; $i < 9; $i++) {
            $nationalId .= random_int(0, 9);
        }

        $sum = 0;

        for ($i = 0; $i < 9; $i++) {
            $sum += (int) $nationalId[$i] * (10 - $i);
        }

        $remainder = $sum % 11;

        $checkDigit = $remainder < 2
            ? $remainder
            : 11 - $remainder;

        return $nationalId . $checkDigit;
    }
}