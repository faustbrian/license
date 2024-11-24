<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\License\Renderer;

use BaseCodeOy\License\Data\License;
use BaseCodeOy\License\Template\Template;

interface Renderer
{
    public function render(License $license, Template $template): string;
}
