<?php

declare(strict_types=1);

namespace BaseCodeOy\License\Renderer;

use BaseCodeOy\License\Data\License;
use BaseCodeOy\License\Template\Template;

interface Renderer
{
    public function render(License $license, Template $template): string;
}
