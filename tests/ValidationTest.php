<?php

namespace IranianDevTools\Tests\NationalId;

use IranianDevTools\NationalId\Validator;
use PHPUnit\Framework\TestCase;

class ValidatorTest extends TestCase
{
    public function testValidNationalId(): void
    {
        $validator = new Validator();

        $this->assertTrue(
            $validator->isValid('9462204209')
        );
    }

    public function testInvalidNationalId(): void
    {
        $validator = new Validator();

        $this->assertFalse(
            $validator->isValid('1234567890')
        );
    }

    public function testInvalidLength(): void
    {
        $validator = new Validator();

        $this->assertFalse(
            $validator->isValid('123456789')
        );

        $this->assertFalse(
            $validator->isValid('12345678901')
        );
    }

    public function testNonNumericNationalId(): void
    {
        $validator = new Validator();

        $this->assertFalse(
            $validator->isValid('123456789A')
        );
    }

    public function testRepeatedDigitsAreInvalid(): void
    {
        $validator = new Validator();

        $this->assertFalse(
            $validator->isValid('1111111111')
        );

        $this->assertFalse(
            $validator->isValid('0000000000')
        );
    }
}