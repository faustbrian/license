<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\License\Template;

interface Template
{
    public function directory(): string;

    public function header(): string;

    public function markdown(): string;

    public function text(): string;
}
