<?php

namespace IranianDevTools\Tests\NationalId;

use IranianDevTools\NationalId\Generator;
use IranianDevTools\NationalId\Validator;
use PHPUnit\Framework\TestCase;

class GeneratorTest extends TestCase
{
    public function testGeneratedNationalIdHasTenDigits(): void
    {
        $generator = new Generator();

        $nationalId = $generator->generate();

        $this->assertRegExp(
            '/^[0-9]{10}$/',
            $nationalId
        );
    }

    public function testGeneratedNationalIdIsValid(): void
    {
        $generator = new Generator();
        $validator = new Validator();

        $nationalId = $generator->generate();

        $this->assertTrue(
            $validator->isValid($nationalId)
        );
    }

    public function testGeneratedNationalIdsAreValid(): void
{
    $generator = new Generator();
    $validator = new Validator();

    for ($i = 0; $i < 100; $i++) {
        $nationalId = $generator->generate();

        $this->assertTrue(
            $validator->isValid($nationalId)
        );
    }
}
}