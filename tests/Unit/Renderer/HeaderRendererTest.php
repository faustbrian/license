<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests\Unit\Renderer;

use BaseCodeOy\License\Data\File;
use BaseCodeOy\License\Data\Holder;
use BaseCodeOy\License\Data\License;
use BaseCodeOy\License\Data\Project;
use BaseCodeOy\License\Data\Range;
use BaseCodeOy\License\Data\Url;
use BaseCodeOy\License\Renderer\HeaderRenderer;
use BaseCodeOy\License\Template\MIT;

it('should render the license', function (): void {
    $renderer = new HeaderRenderer();

    $license = new License(
        new File('LICENSE'),
        new Project('BaseCode'),
        new Range(2_020, (int) \date('Y')),
        new Holder('BaseCode', 'hello@basecode.sh'),
        new Url('https://basecode.sh'),
    );
    $template = new MIT();

    expect($renderer->render($license, $template))->toMatchSnapshot();
});
