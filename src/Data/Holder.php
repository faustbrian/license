<?php

declare(strict_types=1);

namespace BombenProdukt\License\Data;

final readonly class Holder
{
    public function __construct(
        private string $name,
        private string $mail,
    ) {
        //
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getMail(): string
    {
        return $this->mail;
    }
}
