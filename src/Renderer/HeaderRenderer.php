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
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

final readonly class HeaderRenderer implements Renderer
{
    #[\Override()]
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
