<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\License\Data;

final readonly class License
{
    public function __construct(
        private File $file,
        private Project $project,
        private Range $range,
        private Holder $holder,
        private Url $url,
    ) {
        //
    }

    public function getFile(): File
    {
        return $this->file;
    }

    public function getProject(): Project
    {
        return $this->project;
    }

    public function getRange(): Range
    {
        return $this->range;
    }

    public function getHolder(): Holder
    {
        return $this->holder;
    }

    public function getUrl(): Url
    {
        return $this->url;
    }
}
