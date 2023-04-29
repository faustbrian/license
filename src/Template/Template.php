<?php

declare(strict_types=1);

namespace BombenProdukt\License\Template;

interface Template
{
    public function directory(): string;

    public function header(): string;

    public function markdown(): string;

    public function text(): string;
}
