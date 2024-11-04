<?php

declare(strict_types=1);

namespace BaseCodeOy\License\Template;

interface Template
{
    public function directory(): string;

    public function header(): string;

    public function markdown(): string;

    public function text(): string;
}
