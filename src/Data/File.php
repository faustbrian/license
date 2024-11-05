<?php

declare(strict_types=1);

namespace BaseCodeOy\License\Data;

final readonly class File
{
    public function __construct(
        private string $value,
    ) {
        //
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
