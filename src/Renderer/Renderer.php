<?php

declare(strict_types=1);

namespace BombenProdukt\License\Renderer;

use BombenProdukt\License\Data\License;
use BombenProdukt\License\Template\Template;

interface Renderer
{
    public function render(License $license, Template $template): string;
}
