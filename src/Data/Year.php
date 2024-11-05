<?php

declare(strict_types=1);

namespace BaseCodeOy\License\Data;

final readonly class Year
{
    public function __construct(
        private int $value,
    ) {
        //
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
