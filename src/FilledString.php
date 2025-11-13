<?php

namespace Pinnacle\CommonValueObjects;

use InvalidArgumentException;

class FilledString
{
    /**
     * @var string
     */
    protected $value;

    public function __construct(string $value)
    {
        if (trim($value) === '') {
            throw new InvalidArgumentException(sprintf('%s was provided an empty string in the constructor.', self::class));
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
