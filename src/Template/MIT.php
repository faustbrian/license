<?php

declare(strict_types=1);

namespace BaseCodeOy\License\Template;

final readonly class MIT implements Template
{
    public function directory(): string
    {
        return __DIR__.'/../../resources/views/mit';
    }

    public function header(): string
    {
        return 'header.twig';
    }

    public function markdown(): string
    {
        return 'markdown.twig';
    }

    public function text(): string
    {
        return 'text.twig';
    }
}
