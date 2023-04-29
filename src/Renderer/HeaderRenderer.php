<?php

declare(strict_types=1);

namespace BombenProdukt\License\Renderer;

use BombenProdukt\License\Data\License;
use BombenProdukt\License\Template\Template;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

final readonly class HeaderRenderer implements Renderer
{
    public function render(License $license, Template $template): string
    {
        return $this->getEnvironment($template)->render($template->header(), [
            'file' => $license->getFile()->getValue(),
            'project' => $license->getProject()->getValue(),
            'range' => $license->getRange()->toString(),
            'holder' => $license->getHolder()->getName(),
            'email' => $license->getHolder()->getMail(),
            'url' => $license->getUrl()->getValue(),
        ]);
    }

    private function getEnvironment(Template $template): Environment
    {
        return new Environment(new FilesystemLoader($template->directory()));
    }
}
