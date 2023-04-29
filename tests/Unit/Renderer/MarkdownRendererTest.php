<?php

declare(strict_types=1);

namespace Tests\Unit\Renderer;

use BombenProdukt\License\Data\File;
use BombenProdukt\License\Data\Holder;
use BombenProdukt\License\Data\License;
use BombenProdukt\License\Data\Project;
use BombenProdukt\License\Data\Range;
use BombenProdukt\License\Data\Url;
use BombenProdukt\License\Renderer\MarkdownRenderer;
use BombenProdukt\License\Template\MIT;
use function Spatie\Snapshots\assertMatchesSnapshot;

it('should render the license', function (): void {
    $renderer = new MarkdownRenderer();

    $license = new License(
        new File('LICENSE'),
        new Project('BombenProdukt'),
        new Range(2020, (int) \date('Y')),
        new Holder('BombenProdukt', 'hey@bombenprodukt.com'),
        new Url('https://bombenprodukt.com'),
    );
    $template = new MIT();

    assertMatchesSnapshot($renderer->render($license, $template));
});
