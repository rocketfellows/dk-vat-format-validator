<?php

namespace rocketfellows\DKVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;
use rocketfellows\DKVatFormatValidator\DKVatFormatValidator;

class DKVatFormatValidatorTest extends TestCase
{
    /**
     * @var DKVatFormatValidator
     */
    private $validator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new DKVatFormatValidator();
    }

    /**
     * @dataProvider getVatNumbersProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumbersProvidedData(): array
    {
        return [
            [
                'vatNumber' => 'DK12345678',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'DK00000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'DK11111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'DK99999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678',
                'isValid' => true,
            ],
            [
                'vatNumber' => '00000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '11111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '99999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'DK123456789',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'DK1234567',
                'isValid' => true,
            ],
            [
                'vatNumber' => '123456789',
                'isValid' => true,
            ],
            [
                'vatNumber' => '1234567',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'Dk12345678',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'dK12345678',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'dk12345678',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'DE12345678',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'DK12345678A',
                'isValid' => true,
            ],
            [
                'vatNumber' => '1',
                'isValid' => true,
            ],
            [
                'vatNumber' => '',
                'isValid' => true,
            ],
        ];
    }
}
