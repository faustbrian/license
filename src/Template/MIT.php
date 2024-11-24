<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

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
