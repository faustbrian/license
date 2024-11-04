<?php

declare(strict_types=1);

namespace BaseCodeOy\License\Renderer;

use BaseCodeOy\License\Data\License;
use BaseCodeOy\License\Template\Template;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

final readonly class TextRenderer implements Renderer
{
    public function render(License $license, Template $template): string
    {
        return $this->getEnvironment($template)->render($template->text(), [
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
