<?php

namespace Pinnacle\CommonValueObjects;

use UnexpectedValueException;

class FilledString
{
    private $value;

    public function __construct(string $value)
    {
        if (trim($value) === '') {
            throw new UnexpectedValueException(sprintf('%s was provided an empty string in the constructor.', self::class));
        }

        $this->value = $value;
    }

    public function __toString(): string
    {
        return $this->value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
