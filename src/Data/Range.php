<?php

declare(strict_types=1);

namespace BaseCodeOy\License\Data;

final readonly class Range
{
    public function __construct(
        private int $startYear,
        private int $endYear,
    ) {
        //
    }

    public function getStartYear(): int
    {
        return $this->startYear;
    }

    public function getEndYear(): int
    {
        return $this->endYear;
    }

    public function toString(): string
    {
        if ($this->startYear === $this->endYear) {
            return (string) $this->startYear;
        }

        return $this->startYear.'-'.$this->endYear;
    }
}
