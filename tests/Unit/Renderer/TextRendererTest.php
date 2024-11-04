<?php

declare(strict_types=1);

namespace Tests\Unit\Renderer;

use BaseCodeOy\License\Data\File;
use BaseCodeOy\License\Data\Holder;
use BaseCodeOy\License\Data\License;
use BaseCodeOy\License\Data\Project;
use BaseCodeOy\License\Data\Range;
use BaseCodeOy\License\Data\Url;
use BaseCodeOy\License\Renderer\TextRenderer;
use BaseCodeOy\License\Template\MIT;
use function Spatie\Snapshots\assertMatchesSnapshot;

it('should render the license', function (): void {
    $renderer = new TextRenderer();

    $license = new License(
        new File('LICENSE'),
        new Project('BaseCode'),
        new Range(2020, (int) \date('Y')),
        new Holder('BaseCode', 'hello@basecode.sh'),
        new Url('https://basecode.sh'),
    );
    $template = new MIT();

    assertMatchesSnapshot($renderer->render($license, $template));
});
